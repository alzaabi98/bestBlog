<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'my_posts';
    // protected $primaryKey = 'postID';
    // public $timestamp = false ;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
