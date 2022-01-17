<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    protected $fillable = ['content','type',"status"];
}
