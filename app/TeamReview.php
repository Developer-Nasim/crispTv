<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamReview extends Model
{
    protected $fillable = ['name','title','img','content',"status"];
}
