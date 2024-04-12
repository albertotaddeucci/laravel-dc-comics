@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="py-5">Modifica il fumetto</h2>
    <form action="{{route('comics.update' , $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="title"  class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}"></input>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}"></input>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input class="form-control" id="price" name="price" value="{{$comic->price}}"></input>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input class="form-control" id="series" name="series" value="{{$comic->series}}"></input>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Giorno di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"></input>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input class="form-control" id="type" name="type" value="{{$comic->type}}"></input>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}" required></input>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}" required></input>
        </div>
    
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>

</div>

    
    
@endsection