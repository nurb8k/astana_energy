<?php

namespace App\Http\Controllers;

use App\Models\Infographic;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $ln = News::latest('time_publish')->first();
        $on = News::where('id','!=',$ln->id)->take(2)->get();
        $lastInfo = Infographic::query()->latest()->first();
        return view('welcome',compact('ln','on','lastInfo'));
    }
}
