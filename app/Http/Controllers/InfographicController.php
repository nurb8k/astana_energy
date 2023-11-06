<?php

namespace App\Http\Controllers;

use App\Models\Infographic;
use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function create()
    {
        return view('admin.dashboard.infographic.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'output' => 'required|numeric',
            'free' => 'required|numeric',
            'contacted' => 'required|numeric',
            'centred' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Infographic::create([
            'output' => $request->input('output'),
            'free' => $request->input('free'),
            'contacted' => $request->input('contacted'),
            'centred' => $request->input('centred'),
            'date' => $request->input('date'),
        ]);

        return redirect()->back()->with('success','Инфографика успешно добавлен!');
    }
}
