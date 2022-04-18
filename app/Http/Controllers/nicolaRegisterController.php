<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class nicolaRegisterController extends Controller
{
    //
    public function register()
    {
        return view('nicolaRegister', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);

        if (Auth::attempt($ValidatedData)) {
            $request->session()->regenerate();

            return redirect()->intended('nicolaLogin');
        }

        return back()->withErrors([
            'error' => 'Register Error!',
        ]);
    }
}
