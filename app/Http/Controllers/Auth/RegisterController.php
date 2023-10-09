<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,name',
            'email' => 'required|max:50|email|unique:users,email',
            'password' => 'required|min:5|max:255',
        ]);

        // store user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        // redirect
        return redirect()->route('home');
    }
}
