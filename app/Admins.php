<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    protected $fillable = ['firstname', 'lastname', 'email', 'password'];
}
