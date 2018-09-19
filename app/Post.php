<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function category(){
        return $this->belongsTo('App\Category');
    }



}
