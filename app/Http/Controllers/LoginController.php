<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                Auth::login($user);
                return redirect()->intended('dashboard');
            } else {
                return redirect()->route('login')->with('error' ,'Kata sandi salah');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email tidak valid');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
