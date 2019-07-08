<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' =>'required|email',
                'password' =>'required|min:8|max:32'
            ],[
                'email.required' => 'email là trường bắt buộc',
                'email.email' => 'email không đúng định dạng',
                'password.required' => 'mật khẩu là trường bắt buộc',
                'password.min' => 'mật khẩu phải chứa ít nhất 8 kí tự ',
            ]);
        $user = User::where('email',$request->email)->first();
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            $id = $user->id;
            return redirect('user/'.$id);
        } else {
            return redirect('login')->with('thongbao','Đăng nhập không thành công');
        }
    }
}