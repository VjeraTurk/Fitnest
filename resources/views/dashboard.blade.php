@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your <i>fitnest.</i></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href = "/posts/create_training" class="btn btn-primary">Create Training</a>
                        <a href = "/posts/create" class="btn btn-primary">Create Exercise</a>

                        <br>
                        <br>
                        <h3>Your Exercises<h3>
                        <!-- provjera ima li objava-->
                        @if(count($posts)>0)
                            <table class = "table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'calss' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no posts </p>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
