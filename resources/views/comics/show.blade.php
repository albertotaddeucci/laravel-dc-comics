@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <div class="row align-items-center">
        <div class="col text-center">
            <img src="{{$comic->thumb}}" class="img-fluid" style="width: 200px" alt="">
        </div>
        <div class="col text-center">
            <h2>{{$comic->title}}</h2>

        </div>
    </div>
    <hr>
    
    <div class="row justify-content-center py-5">
        <div class="col-6">

            <p>{{$comic->description}}</p>
        </div>
    </div>

    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>

</div>
    
@endsection