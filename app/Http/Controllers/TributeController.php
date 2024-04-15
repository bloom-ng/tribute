<?php

namespace App\Http\Controllers;

use App\Models\Tribute;
use Illuminate\Http\Request;

class TributeController extends Controller
{
    public function index()
    {
        $tributes = Tribute::latest()->limit(5)->get();

        return view("home", ["tributes" => $tributes]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            "name" => "string|required",
            "content" => "string|required",
            "artifact" => "string|required",
        ]);

        Tribute::create($validated);

        return redirect("/");
    }
}
