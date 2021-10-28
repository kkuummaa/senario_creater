<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senario extends Model
{
    // validation
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'overview' => 'required',
    );
}
