@extends('layouts.main')

@section('content')

    <div class="container">
        <h2 class="mb-10">Comics list</h2>
        <table class="table">
            <thead>
              <tr>
                
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $item)
                  <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->type}}</td>
                      <td>
                            <a class="btn btn-success" 
                                href="{{route('comics.show', $item->id)}}"
                            >
                                SHOW
                            </a>
                      </td>
                      <td>EDIT</td>
                      <td>DELETE</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection