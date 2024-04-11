@extends('layouts.app')

@section('content')

<div class="container py-5">

<h1 class="pb-3">Fumetti</h1>

    
    <ul class="list-group">
        @foreach ($comics as $comic)  
        <li class="list-group-item">
            <div class="row">
                <div class="col">{{$comic->title}}</div>
                <div class="col text-end"><a href="{{route('comics.show', $comic->id)}}">Esplora</a></div>
            </div>
        </li>
        
        @endforeach
    </ul>

    <a href="{{route('comics.create')}}" class="btn btn-primary my-5">Aggiungi un fumetto</a>

</div>
    
@endsection