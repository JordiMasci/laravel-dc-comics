<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// IMPORTO IL MODELLO
use App\Models\Comics;

class DcComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comics::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comics();
        $comic->fill($data);
        $comic->save();

        return redirect()->route("comics.index", $comic)->with('Il fumetto è stato creato con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id

     */
    public function show(Comics $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id

     */
    public function edit(Comics $comic)
    {
       return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id

     */
    public function update(Request $request, Comics $comic)
    {
        $data = $request->all();

        $comic->update($data);
        return redirect()->route("comics.show", $comic)->with('Il fumetto è stato modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id

     */
    public function destroy($id)
    {
        //
    }
}