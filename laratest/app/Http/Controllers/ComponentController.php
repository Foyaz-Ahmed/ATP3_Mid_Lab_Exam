<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casing;
use App\Ram;
use App\Graphics_Card;
use App\Storage;
use App\Monitors;

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

    public function graphics_cardList()

    {
    	$gc = Graphics_Card::all();
   
       return  view('component.graphics_card')->with('gc',$gc);
    }

    public function storageList()

    {
    	$storage = Storage::all();
   
       return  view('component.storage')->with('storage',$storage);
    }

    public function monitorList()

    {
    	$monitors = Monitors::all();
   
       return  view('component.monitor')->with('monitors',$monitors);
    }
}
