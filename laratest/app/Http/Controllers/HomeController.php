<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\OrderDetails;
use App\Http\Requests\ProductRequest;
use Validator;

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
}
