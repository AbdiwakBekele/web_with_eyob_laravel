<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {


    public function registrationPost(Request $request) {

        $fullname = $request->fullname;
        $email = $request->email;
        $password = Hash::make($request->password);

        $user = User::create([
            'fullname' => $fullname,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function registration() {
        $user = User::all();
        return $user;
    }

    public function login() {
        return view('auth.loginPage');
    }

    public function loginPost(Request $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home')->with('success', 'Login Successfully');
        }
        return back()->with('error', 'Invalid Credential');
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
