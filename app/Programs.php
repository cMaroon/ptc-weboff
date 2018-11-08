<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    
    protected $table = 'programs_information';

    //Database Tables
    protected $fillable = [
        'program_code','descriptive_title'

    ];


}
