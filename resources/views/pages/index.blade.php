@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
          <h1 class="display-3">{{$title}}</h1>
          <p>Welcome to Fitnest! Stay fit in comfort of your home - make your home your <i>fitnest.</i></p>
          <p><a class="btn btn-primary btn-lg" href="/about" role="button">Learn more »</a></p>
        </div>
      </div>
@endsection