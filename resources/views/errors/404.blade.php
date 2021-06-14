@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="text-center">
            <h2>ERRORE 404</h2>

            <h3>La tua ricerca non è andata a buon fine</h3>

            <a href="{{route('comics.index')}}">Tornare indietro?</a>

        </div>


    </div>
@endsection