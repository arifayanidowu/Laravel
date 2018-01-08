<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SessionController extends Controller
{
    
    public function create() {

        auth()->attempt(request([
            'email',
            'password'
        ]));

        return redirect('/');


    }


}
