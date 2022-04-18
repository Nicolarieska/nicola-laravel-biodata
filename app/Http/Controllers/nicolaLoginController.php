<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class nicolaloginController extends Controller
{
    public function login()
    {
        return view('nicolaLogin', [
            'title' => 'login'
        ]);
    }

    public function inilogin(Request $request){
        $validate = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/home');
    }
}
