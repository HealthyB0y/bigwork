<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
class SignUpController extends Controller
{
    public function getSignUp()
    {
    	return view('signUp');
    }
    public function postSignUp(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required|min:8|max:32',
            'passwordAgain'=>'required|same:password'
        ],[
            'name.required'=>'Bạn chưa nhập tên người dùng',
            'name.min'=>'Tên người dùng phải có ít nhất 3 kí tự',

            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email đã tồn tại',

            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 8 kí tự',
            'password.max'=>'Mật khẩu chứa tối đa 32 kí tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa đúng'
        ]);
        $user = new User;
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->password = bcrypt($request->password); 
        $user->birthday = $request->birthday; 
        $user->sex = $request->sex; 
        $user->country = $request->country;     
        $user->save();

        return redirect('signUp')->with('thongbao','Thêm thành công');
    }
}