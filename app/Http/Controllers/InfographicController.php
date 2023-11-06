<?php

namespace App\Http\Controllers;

use App\Models\Infographic;
use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function index()
    {
        Infographic::paginate(6);
        return view('pages.infographic');
    }
}
