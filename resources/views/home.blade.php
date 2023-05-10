@extends('layouts/main')

@section('content')

<div class="container text-center">
  <h1>Movies DB</h1>
</div>
<div class="container card-container">
  @foreach ($movies as $singleMovie)
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Title: {{$singleMovie->title}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{$singleMovie->original_title}}</h6>
      <div class="card-text">Nationality: <span class="weight600">{{$singleMovie->nationality}}</span></div>
      <div class="card-text">Release date: <span class="weight600">{{$singleMovie->date}}</span></div>
      <div class="card-text">Vote: <span class="weight600">{{$singleMovie->vote}}</span></div>
    </div>
  </div>
  @endforeach
</div>



@endsection