<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        // dd($comics);

        return view('layouts.comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newComic = new Comic();

        // $newComic->title = $request->title;
        // $newComic->description = $request->description;
        // $newComic->type = $request->type;
        // $newComic->src = $request->src;
        // $newComic->cooking_time = $request['cooking-time'];
        // $newComic->weight = $request->weight;

        $newComic->save();

        // spostiamo l'utente nella index
        return redirect()->route('layouts.comic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('layouts.comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
