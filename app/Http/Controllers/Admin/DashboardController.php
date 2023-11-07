<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infographic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countInfo = Infographic::query()->count();
        $lastInfo = Infographic::query()->orderBy('date','desc')->first();


        return view('admin.dashboard.index',['countInfo' => $countInfo,'lastInfo' => $lastInfo]);
    }
}
