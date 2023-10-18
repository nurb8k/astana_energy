<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ln = News::latest('time_publish')->first();
        $on = News::where('id','!=',$ln->id)->take(2)->get();

        return view('welcome',compact('ln','on'));
    }
}
