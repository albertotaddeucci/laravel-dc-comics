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
        <div class="col-6 text-center">
            
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning me-3">Modifica</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              Sei sicuro di voler eliminare questo fumetto?
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")                    
                    
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

          </div>
        </div>
    </div>

</div>
    
@endsection