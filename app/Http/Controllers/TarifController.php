<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        $data = Tarif::all();
        return view('pages.tariff', compact('data'));
    }

    public function create()
    {
        return view('admin.dashboard.tarif.create');
    }
}
