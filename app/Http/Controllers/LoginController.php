<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'login' => true
        ]);
    }

    public function loginpost()
    {
        if (Auth::attempt(["email" => request("email"), "password" => request("password")])) {
            return redirect('/customer');
        }
        return back()->with("Salah, silahkan cek kembali email dan password Anda")->with("email", request("email"));
    }

    public function authenticate(Request $request)
    {
        
        $crendentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        if (Auth::attempt($crendentials)) {
            $request->session()->regenerate();

            if (Auth::user()->level == 'admin') {
                return redirect()->intended('/admhome');
            } else if (Auth::user()->level == 'customer') {
                return redirect()->intended('/customer');
            }
        }
        return back()->with('loginError', 'Login Is Failed')->withInput();
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

}

