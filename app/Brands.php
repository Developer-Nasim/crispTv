<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = ['logo','name',"link"];
}
