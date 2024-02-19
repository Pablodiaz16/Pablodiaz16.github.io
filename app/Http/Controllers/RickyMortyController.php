<?php

namespace App\Http\Controllers;

use App\Models\RickyMorty;
use Illuminate\Http\Request;

class RickyMortyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getCharacter(Request $request) {
        $nombre = $request->get('nombre');
        $url = "https://rickandmortyapi.com/api/character/?name=".$nombre;
        $result = file_get_contents($url);
        $resultados = json_decode($result);
        //print_r($resultados);
        $nombres = [];
        $imagenes = [];
        foreach ($resultados->results as $personaje) {
            $nombres[] = $personaje->name;
            $imagenes[] = $personaje->image;
        }

        return view("characters", compact("nombres", "imagenes"));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RickyMorty $rickyMorty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RickyMorty $rickyMorty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RickyMorty $rickyMorty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RickyMorty $rickyMorty)
    {
        //
    }
}
