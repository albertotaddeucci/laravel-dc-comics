<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request->all());


        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    public function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'nullable|max:300',
            'thumb' => 'nullable',
            'price' => 'required|max:50',
            'series' => 'nullable|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200'
        ], [

            'title.required' => "Devi inserire un titolo",
            'title.max' => 'Deve avere un massimo di :max caratteri',

            'description.max' => 'Deve avere un massimo di :max caratteri',

            'price.required' => 'Devi inserire il prezzo',
            'price.max' => 'Deve avere un massimo di :max caratteri',

            'series.max' => 'Deve avere un massimo di :max caratteri',

            'sale_date.required' => 'Devi inserire la data',

            'type.required' => 'Devi inserire il tipo',
            'type.max' => 'Deve avere un massimo di :max caratteri',

            'artists.required' => 'Devi inserire uno o più artisti',
            'artists.max' => 'Deve avere un massimo di :max caratteri',

            'writers.required' => 'Devi inserire uno o più scrittori',
            'writers.max' => 'Deve avere un massimo di :max caratteri',


        ])->validate();
    }
}
