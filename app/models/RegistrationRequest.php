<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationRequest extends Model
{
     protected $fillable = ['name','email','password'];

}
