@extends('layouts.app')

@section('page-title', 'Index' )

@section('main-content')
<div class="container py-5">
  <div class="row g-3">
      @foreach ($movies as $movie)
      <div class="col-3">
          <div class="card h-100">
            <div class="card-header">
                {{$movie->title}}
            </div>
            <div class="card-body d-flex flex-column g-1">
                <strong>Original Title:</strong>{{$movie->original_title}}
                <strong>Country:</strong>{{$movie->nationality}}
                <strong>Year:</strong>{{$movie->date}}
                <strong>Vote:</strong>{{$movie->vote}}
                <a href="{{route('details', $movie->id)}}" class="btn btn-primary mt-1">Get details</a>
            </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection