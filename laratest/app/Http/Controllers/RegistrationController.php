<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Person;

class RegistrationController extends Controller
{
    public function home(Request $requ){
    return view('registration.index');
    }


    public function index(Request $requ){
    return view('registration.adminRegister');
    }


    public function register(Request $requ){
        
        $person = new Person();

        if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
       
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('profile_upload', $filename);
        
         $person->id    = $requ->id;
         $person->Name  =  $requ->name;
         $person->Password   =  $requ->password;
         $person->Email      =  $requ->email;
         $person->id       =  $requ->id;
         $person->Gender     =  $requ->gender;
         $person->Status   =  $requ->status;
         $person->PhoneNO     =  $requ->phone;
         $person->Salary      =  $requ->salary;
         $person->DOB   =  $requ->dob;
         $person->Type   =  "Admin";
         $person->profile_image = $filename;
         
         $person->save();
         return redirect()->route('login');

        }
        
    }



    public function customer_index(Request $requ)

    {
        return view('registration.customerRegister');
    }


    public function customer_register(Request $requ){
        
        $person = new Person();

        if($requ->hasFile('myfile'))
        {
        $file = $requ->file('myfile');
       
        $filename =  time().".".$file->getClientOriginalExtension();
        $file->move('profile_upload', $filename);
        
         $person->id    = $requ->id;
         $person->Name  =  $requ->name;
         $person->Password   =  $requ->password;
         $person->Email      =  $requ->email;
         $person->id       =  $requ->id;
         $person->Gender     =  $requ->gender;
         $person->Status   =  $requ->status;
         $person->PhoneNO     =  $requ->phone;
         $person->Salary      =  $requ->salary;
         $person->DOB   =  $requ->dob;
         $person->Type   =  "Customer";
         $person->profile_image = $filename;
         
         $person->save();
         return redirect()->route('login');

        }
        
    }
}
