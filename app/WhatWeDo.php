<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatWeDo extends Model
{
    protected $fillable = ['title','content','main_img','another_img',"status"];
}



