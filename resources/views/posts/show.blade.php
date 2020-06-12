@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>   
    <div>
        {!!$post->body!!} 
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr/>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <!-- čini se da pull-right ne radi-->
    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'calss' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection