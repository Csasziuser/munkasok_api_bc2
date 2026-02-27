<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Munkas;

class MunkasController extends Controller
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
            "name" => "required|string|min:1|max:25",
            "phone" => "required|string|min:1",
            "available" => "required|integer|max:1"
        ],[
            "required" => ":attribute kotelezo mezo",
            "string" => ":attribute szoveges mezo",
            "integer"=> ":attribute szam mezo",
            "min" => ":attribute nak ennyi a minimuma: :min",
            "max" => ":attribute nak ennyi a maximumja: :max",
            "available.max" => ":attribute nak ennyi a maximuma: :max",
        ],[
            "name" => "név",
            "phone"=> "telefonszám",
            "available" => "elerhetőség"
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
