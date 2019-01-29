<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 19.01.2019
 * Time: 21:38
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TestController extends Controller
{
    public function showLoginForm(Request $request)
    {
        return view('blocks.login');
    }

    public function postingLoginData(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        if ($login === '111' && $password === '222') {
            return redirect()->route('home');
        }

        return view('blocks.login', ['errorMessage' => 'Неправильный логин или пароль']);
    }

}