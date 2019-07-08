<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    //
    public function getPersonal(){
    	return view('personal');
    }
    public function fixPersonal($Request){
    	return view('personcal');
    } 
}
