<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoreValues extends Model
{
    protected $fillable = ['title','content','img',"status"];
}
