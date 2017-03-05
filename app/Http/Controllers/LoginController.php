<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request['username'], 'password' => Hash::make($request['password'])])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
        	echo "denied";
        }
    }
}
