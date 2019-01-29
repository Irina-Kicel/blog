<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        if ($login === '123' && $password === '123') {
            return redirect()->route('loginAdmin');
        }

        return view('login', ['errorMessage' => 'Неправильный логин или пароль']);
    }

    public function logout()
    {

    }

}
