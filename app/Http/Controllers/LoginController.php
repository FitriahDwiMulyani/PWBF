<?php

namespace App\Http\Controllers;

use App\Models\datapengirim;
use App\Models\usertracking;
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

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function customer()
    {
        $requests = datapengirim::where('user_id', Auth::user()->id)->get();
        foreach ($requests as $item) {
            $item->confirmed = usertracking::where('Datapengirim_ID', $item->id)
                ->where('status', 'Confirmed')
                ->orderBy('id', 'desc')->first();
            $item->pickup = usertracking::where('Datapengirim_ID', $item->id)
                ->where('status', 'Picking Up')
                ->orderBy('id', 'desc')->first();
            $item->onprocess = usertracking::where('Datapengirim_ID', $item->id)
                ->where('status', 'On Process')
                ->orderBy('id', 'desc')->first();
            $item->done = usertracking::where('Datapengirim_ID', $item->id)
                ->where('status', 'Done')
                ->orderBy('id', 'desc')->first();
            $item->lastUpdate = usertracking::select('status', 'estimated_delivery', 'description')->where('Datapengirim_ID', $item->id)->orderBy('id', 'desc')->first();
        }
        return view('customer', compact('requests'));
    }
}
