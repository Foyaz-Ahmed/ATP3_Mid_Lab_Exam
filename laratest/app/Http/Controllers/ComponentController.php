<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casing;

class ComponentController extends Controller
{
    public function casingList()

    {
       $casing = Casing::all();
   
       return  view('component.casing')->with('casing',$casing);
    }
}
