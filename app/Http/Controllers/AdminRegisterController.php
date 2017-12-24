<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateAdminRegData;

use App\Admin;

class AdminRegisterController extends Controller
{
    public function showRegister() {
        $title = "Register";
        $label = "Admin Register";

        return view('admin.admin-Register', compact('title', 'label'));
  
    }

    public function register(ValidateAdminRegData $request) {

        $admin = Admin::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        
        $this->guard()->login($admin);
        

        return redirect('/addpost');
    }

    public function guard(){
        return auth()->guard('admin');
    }

}
