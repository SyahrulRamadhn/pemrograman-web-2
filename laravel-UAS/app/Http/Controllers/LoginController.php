<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formlogin(){
       return view('login.login');
    }
    public function actionlogin(Request $request)
    {
       //
    }
    
}
