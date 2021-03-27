<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Person;

class RegistrationController extends Controller
{
    public function index(Request $requ){
    return view('registration.register');
    }


    public function register(RegistrationRequest $requ){
        //inset into dab or model
        $person = new Person();

        if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
        //echo $file->getClientOriginalName()."<br>";
        //echo $file->getClientOriginalExtension()."<br>";
        //echo $file->getSize();
        //$file->move('product_upload', $file->getClientOriginalName());
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('profile_upload', $filename);
        
        
         $person->Name  =  $requ->sellerName;
         $person->Password   =  $requ->password;
         $person->Email      =  $requ->email;
         $person->id       =  $requ->id;
         $person->Gender     =  $requ->gender;
         $person->Status   =  $requ->status;
         $person->PhoneNO     =  $requ->phone;
         $person->Salary      =  $requ->salary;
         
         $person->DOB   =  $requ->dob;
         $person->Type   =  $requ->type;
         $person->profile_image = $filename;
         
         //print_r($person);
         $person->save();
         return redirect()->route('login');

        }
        
    }
}
