<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsAuthController extends Controller
{
    public function index()
    {
        return view('auth.custom.login');
    } 

    public function customStudentLogin(Request $request)
    {
        $request->validate($request, [
            'email' =>'required|email',
            'password' =>'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');

    }

    public function registration()
    {
        return view('auth.custom.registration');
    }

    
}
