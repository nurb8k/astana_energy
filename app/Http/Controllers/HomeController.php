<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function structure()
    {
        return view('pages.structure');
    }
    public function administration()
    {
        return view('administration');
    }
    public function compliance()
    {
        return view('pages.compliance');
    }

    public function vacancy()
    {
        return view('pages.vacancy');
    }
}
