<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{ 
    protected $fillable = ["name","email","number","services","message"];
}
