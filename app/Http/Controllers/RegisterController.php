<?php
/**
 * Created by PhpStorm.
 * User: komp
 * Date: 19.01.2019
 * Time: 21:38
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Site\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegisterController extends SiteController
{

    public function showRegisterForm(Request $request)
    {
        return view('blocks.register')->with('menus', $this->menus);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function postingRegisterData(Request $request)
    {
        /*$login = $request->input('login');
        $password = $request->input('password');

        if ($login === '111' && $password === '222') {
            return redirect()->route('home');
        }*/

        $validator = Validator::make($request->all(), [
            'login' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|max:32|min:6',
            'password2' => 'required|same:password',
            'telephone' => 'nullable|regex:/^\+\d{1,3}\s?\(\d{3}\)\s?\d{3}(-\d{2}){2}$/'
        ]);
        if ($validator->fails()) {

      /*  $validator->errors()->all('<p class="message"> :message </p>');*/

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        return view('blocks.register')->with('menus',$this->menus);
    }

}

