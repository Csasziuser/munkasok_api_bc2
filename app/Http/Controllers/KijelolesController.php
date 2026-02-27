<?php

namespace App\Http\Controllers;

use App\Models\Kijeloles;
use Illuminate\Http\Request;

class KijelolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kijeloles::with('munkas')->get();
        return response()->json($data,200,options:JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata = $request->validate([
            "munkas_id"=>"required|integer|exists:munkasok,id",
            "task_name"=>"required|string"
        ],[
            "required"=>":attribute kötelező mező",
            "integer"=>":attribute szám mező",
            "string"=>":attribute szöveg mező",
            "exists"=>"létező munkás kell"
        ],[
            "munkas_id" => "munkás azonosító",
            "task_name" => "feladat név"
        ]);

        Kijeloles::create($validateddata);
        return response()->json("Feladat kiadva", 201, options:JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
