<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function posts(){
        return $this->hasMany('App\Post');
    }

}
