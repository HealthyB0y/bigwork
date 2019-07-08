<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "Comment";
	public function post(){
		return $this->belongsTo('App\Post','idPost','id');
	}
}
