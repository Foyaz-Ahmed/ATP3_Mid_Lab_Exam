<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;



class loginController extends Controller
{
    public function index(Request $req){
        if($req->session()->has('name')){
            return redirect('/home');
            } 
        return view('login.index');
    }
    public function verify(Request $req){
       

        $userlogin = DB::table('persons')
                            ->where('Password',$req->password)
                            ->where('id',$req->username)
                            ->get();

       if($req->username==""  || $req->password==""){
       
        $req->session()->flash('msg', 'Null Submission');
        return redirect('/login');

      }elseif(count($userlogin) > 0){
           
        $req->session()->put('name', $req->username);
        
        
        return redirect('/home'); 
        
       }else{
        $req->session()->flash('msg', 'invalid username and password');
        return redirect('/login');
       }
    }
    

}
