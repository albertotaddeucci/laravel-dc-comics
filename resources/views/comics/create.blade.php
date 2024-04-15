@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row align-content-center py-5">
        <div class="col-6">
            <h2 class="">Aggiungi un fumetto</h2>

        </div>
        <div class="col-6">
            <a href="{{route('comics.index')}}" >Torna all'indice</a>

        </div>
    </div
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="title"  class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" ></input>
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}"></input>
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}"></input>
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}"></input>
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Giorno di pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}"></input>
            @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}"></input>
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{old('artists')}}"></input>
            @error('artists')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{old('writers')}}"></input>
            @error('writers')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

    
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

</div>

    
    
@endsection