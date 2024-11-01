<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
        ]);

        $data = Data::create([
            'email' => $request->email,
        ]);

        return response()->json([
            'data' => $data,
        ]);
    }
}
