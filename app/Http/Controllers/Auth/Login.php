<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;


class Login extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('auth.login');
    }

    public function create(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard.index');
        }

        return redirect()->route('login')->withErrors(['errors'=>'Эти учетные данные не соответствуют нашим записям.']);
    }

    public function logout()
    {
        \Auth::logout();

        return redirect(route('home'));
    }

}
