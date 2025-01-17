<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugDemoController extends Controller
{
    public function create()
    {
        return view('debug-demo.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:17',
        ]);

        // Uncomment baris berikut untuk debugging request
        // dd($request->all());
        ddd($request);

        // Proses bisnis data...
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
