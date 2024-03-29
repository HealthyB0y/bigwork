<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function __construct(){
    	$this->DangNhap();
    } 

    function DangNhap(){
    	if(Auth::check()){
    		view()->share('userLogin',Auth::user());
    	}
    }

    public function index()
    {
        $user = auth()->user()->id;
        $user = User::find($user_id);
       	$user->load('Posts');
 		return view('dashboard')->with('user',$user);

    }
}
