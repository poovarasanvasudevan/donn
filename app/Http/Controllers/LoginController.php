<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\User;
use Auth;


class LoginController extends Controller
{
    //
    function index()
    {
        if (Auth::user()) {
            return response()->redirectTo('/dashboard');

        } else {
            return view('welcome');
        }

    }

    public function login()
    {
        $username = request()->input('username');
        $password = request()->input('password');
        $remember = request()->input('remember') == 1 ? TRUE : FALSE;


        $user = User::where(['abhyasiid' => $username, "password" => md5($password), "active" => true])->get();

        if ($user->count() == 1) {
            $user = $user->first();
            Auth::loginUsingId($user->id, $remember);

            return response()->json(array('status' => true, 'data' => Auth::user()->toArray()));
        } else {
            return response()->json(array('status' => false));
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->redirectTo('/');
    }

    public function dashboard()
    {
        if (Auth::user()) {

            return response()->view('dashboard');
        } else {
            return response()->redirectTo('/');
        }
    }
}
