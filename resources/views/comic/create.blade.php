@extends('layouts.app')

@section('content')

<div class="container">
    <h2 class="py-5">Aggiungi fumetto</h2>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="title"  class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input class="form-control" id="thumb" name="thumb"></input>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input class="form-control" id="price" name="price"></input>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input class="form-control" id="series" name="series"></input>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Giorno di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date"></input>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input class="form-control" id="type" name="type"></input>
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists" required></input>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers" required></input>
        </div>
    
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

</div>

    
    
@endsection