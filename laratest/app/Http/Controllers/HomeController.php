<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\OrderDetails;
use App\Http\Requests\ProductRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(Request $req){
          
            if($req->session()->has('name')){
            return view('home.index', compact('name'));
            } else{
               $req->session()->flash('msg','Invalid user');
               echo "somthing wrong";
               
            }  

        }

     public function customerlist(){
       
       $customer = Person::all()->where('Type',"Customer");
       return  view('home.list')->with('customer',$customer);
     }  


    public function destroy($id, Request $requ){
        
        if(Person::destroy($id))
        {
            return redirect()->route('home.customerlist');
        }else{
            return redirect('/home'.$id);        
        }
    }                        



}
