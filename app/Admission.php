<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    // protected $connection = 'mysql2';
    protected $table = 'student_admission';
    public $primaryKey = 'id';
    public $timestamp = true;
}
