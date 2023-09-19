<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class Register extends Controller
{
    /**
     *  Register page
     *  @return Application|Factory|View
     */

    public function index()
    {
        $data['title'] = 'Register';
        return view('register.index', $data);
    }

    /**
     *  Account register request
     *  @param RegisterRequest $request
     *  @return RedirectResponse
     */
    public function store(RegisterRequest $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        $user = User::create($data);
        \Auth::login($user);

        return redirect()->route('login')->with('message', 'Register successfully completed, thank you for registering.');
    }

    /**
     *  Forgot password page
     *  @return Application|Factory|View
     */
    public function forgot()
    {
        $data['title'] = 'Forgot Password';
        return view('register.forgot', $data);
    }

}
