<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $table = "Posts";
	public $timestamps = false;

	public function user(){
		return $this->hasMany('App\User','idUser','id');
	}

	public function comment(){
		return $this->hasMany('App\Comment','idComment','id');
	}
}
