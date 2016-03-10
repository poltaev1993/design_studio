<?php

namespace App\Http\Controllers;

use Auth, Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthAdminController extends Controller
{

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin()
    {
        $email = Request::input('email');
        $password = Request::input('password');
        //$remember = Request::input('remember') == 'on' ? true : false;

        return Auth::attempt(['email' => $email, 'password' => $password]) ? redirect('/admin') : redirect()->back()->withInput();
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }

}
