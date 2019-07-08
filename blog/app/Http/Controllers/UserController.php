<?php

namespace App\Http\Controllers;

use Validator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use App\User;
class UserController extends Controller
{
    //
    public function getUser($id)
    {
    	$users = User::where($id,'=',User::all()->id);
    	return view('user',['users'=>$users]);
    }
    public function postUser(Request $request)
    {
    	$this->validate($request,
            [
                'tieude' =>'required|min:1|max:255',
                'noidung' =>'required|min:1'
            ],[
                'tieude.required' => 'Tiêu đề là trường bắt buộc',
                'tieude.min'=>'Nhập tiêu đề bài đăng',
                'tieude.max'=>'Tiêu đề bài đăng quá dài',
                'noidung.required' => 'nội dung là trường bắt buộc',
                'noidung.min' => 'Nhập nội dung bài đăng'
            ]);
    	$posts = new Post;
    	$posts->iduser = 6;
    	$posts->heading = $request->tieude;
    	$posts->content = $request->noidung;
    	$posts->genre = $request->theloai;
    	
    	if($request->hasFIle('hinh'))
    	{
    		$file = $request->file('hinh');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg'){
    			return redirect('user/4')->with('loi','Bạn chỉ được chịn file');
    		}
    		$name = $file->getClientOriginalName();
    		$posts->img=$name;
    	}else{
    		$posts->img="";
    	}

    	$posts->save();
        return redirect('user/4')->with('thongbao','Thêm thành công');
    }
    public function post(){
    	$post = Post::all();
    	$user = User::all();
    	return view('user',['post'=>$post],['user'=>$user]);
    }
}
