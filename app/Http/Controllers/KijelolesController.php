<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KijelolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        ]);
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
