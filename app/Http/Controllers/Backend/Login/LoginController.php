<?php

namespace App\Http\Controllers\Backend\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        $errorMsg = "";
        return view('Backend.login.index', compact('errorMsg'));
    }


    public function userLogin(Request $request)
    {
        if (Auth::attempt(['reg_number' =>$request->reg_number, 'password' =>$request->password])) {
            return redirect()->action('Backend\DashboardController@index');
        } else {
            $errorMsg = "Wrong UserName or Password";
            return view('Backend.login.index', compact('errorMsg'));
        }
    }


    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }

}
