<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        // validation
        $this->validate($request, [
            'email' => 'required|max:50|email',
            'password' => 'required|min:5|max:255',
        ]);

        // sign in
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        // redirect
        return redirect()->route('home');
    }
}
