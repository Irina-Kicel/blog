<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 10.02.2019
 * Time: 11:25
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Site\SiteController;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LoginController extends SiteController
{
    public function showLoginForm(Request $request)
    {
        return view('blocks.login');
    }

    public function postingLoginData(LoginRequest $request)

    {
        $data = $request->except('_token', 'yit_sendmail');

        if(!$data){
            return redirect()
                ->back()
                ->with('message', 'Введен неверный пароль!')
                -withInput();
        }
      /*  if ($request->fails()) {

            return redirect()
                ->back()
                ->withErrors($request)
                ->withInput();*/
       $login = $data['login'];
        $password = $data['password'];

         $sql = DB::table('users')
                ->select('login','password')
                ->where([
                    ['login', $login],
                    ['password', $password]
                ]);


        if (!$sql) {

            return redirect()
                ->back()
                ->withErrors($request)
                ->withInput();
        }

        return view('blocks.main');
    }
}