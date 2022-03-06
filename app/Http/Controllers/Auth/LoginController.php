<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {

        $this->data['headline'] = 'Login';
        return view('login.form', $this->data);
    }

    public function confirm(Request $request) {

       return $formData = $request->all();

       if (Auth::attempt($data)) {
            return redirect()->intended('/');  
        }else{
            return redirect()->route('login')->withErrors(['Invalid Username and Password']);
        }      

    }
}

