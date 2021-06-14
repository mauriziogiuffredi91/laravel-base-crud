@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center">{{$comic->title }}</h1>
        
        <div class="row">
            <div class="col-md-2 offset-md-2">
                <img class="image-fluid text-center" src="{{$comic->image}}" alt="{{$comic->title}}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
                <div class="mb-5 text-center">
                    
                    <h3 class="badge bg-secondary " >Price: {{$comic->price}} €</h3>
                </div>
            </div>
        </div>
    </div>
@endsection