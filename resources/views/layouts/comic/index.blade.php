@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            
        <li>
            {{$comic->title}}
        </li>
        @endforeach
    </ul>
@endsection