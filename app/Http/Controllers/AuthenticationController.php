<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('authentication.login');
    }

    function register(){
    	return view('authentication.register');
    }

    function lockscreen(){
        return view('authentication.lockscreen');
    }

    function forgetPassword(){
    	return view('authentication.forget-password');
    }
    
    function page404(){
    	return view('authentication.page404');
    }

    function page403(){
        return view('authentication.page403');
    }

    function page500(){
        return view('authentication.page500');
    }

    function page503(){
    	return view('authentication.page503');
    }
}
