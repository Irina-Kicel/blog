<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 10.02.2019
 * Time: 11:25
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LoginController extends SiteController
{
    public function showLoginForm(Request $request)
    {
        return view('blocks.login')->with('menus',$this->menus);
    }

    public function postingLoginData(Request $request)
    {
        $data = $request->except('_token', 'yit_sendmail');
        print_r($data);
        $login = $data['login'];
        $password = $data['password'];

        $validator = Validator::make($request->all(), [
            'login' => 'required|min:3|max:20',
            'password' => 'required|max:32|min:6'
        ]);

        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
                DB::table('users')
                ->select('login','password')
                ->where([
                    ['login', $login],
                    ['password', $password]
                   ]);


        return view('blocks.main')->with('menus',$this->menus);
    }
}