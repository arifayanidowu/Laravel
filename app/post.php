<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // code to enable our posts get into the database, $fillable is an array
    //protected $fillable = ['author', 'title', 'content'];

    protected $guarded = ['_token', 'register'];
}
