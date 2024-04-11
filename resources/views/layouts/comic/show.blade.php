@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <div class="row align-items-center">
        <div class="col">
            <h2>{{$comic->title}}</h2>

        </div>
        <div class="col">
            <img src="{{$comic->thumb}}" class="img-fluid" style="width: 200px" alt="">
        </div>
    </div>
    <hr>

    <p>{{$comic->description}}</p>
</div>
    
@endsection