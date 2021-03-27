<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casing;
use App\Ram;

class ComponentController extends Controller
{
    public function casingList()

    {
       $casing = Casing::all();
   
       return  view('component.casing')->with('casing',$casing);
    }

    public function ramList()

    {
       $ram = Ram::all();
   
       return  view('component.ram')->with('ram',$ram);
    }
}
