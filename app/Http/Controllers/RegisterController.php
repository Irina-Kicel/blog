<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 19.01.2019
 * Time: 21:38
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Site\SiteController;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegisterController extends SiteController
{

    public function showRegisterForm(Request $request)
    {
        return view('blocks.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function postingRegisterData(RegisterRequest $request)
    {
       $data = $request->except('user_id', '_token', 'password2', 'yit_sendmail');

        if ($request->fails()) {

            return redirect()
                ->back()
                ->withErrors($request)
                ->withInput();
        }
           $key = DB::table('users')
              ->insertGetId([
                'email' => $data['email'],
                'password' => $data['password']
                    ]);


            DB::table('profiles')
                ->insert(['name' => $data['login'],
                    'phone' => $data['telephone'],
                    'user_id' => $key
                    ]);
        return view('blocks.main');
    }

}

