@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <ul class="list-group">
        @foreach ($comics as $comic)  
        <li class="list-group-item">
            <div class="row">
                <div class="col">{{$comic->title}}</div>
                <div class="col text-end"><a href="">Esplora</a></div>
            </div>
        </li>
        
        @endforeach
    </ul>

</div>
    
@endsection