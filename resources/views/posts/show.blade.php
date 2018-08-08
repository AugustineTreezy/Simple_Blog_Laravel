@extends('layouts.app')

@section('content')
<br>
    <a href="/posts" class="btn btn-info">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"><br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>  <br>  
    <hr>

    {{-- Don't show edit and delete if user is a guest --}}
    @if (!Auth::guest())

        {{-- Only allow user to edit and delete his own post--}}
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger float-right'])}}
            {!!Form::close()!!}   
        @endif  

    @endif
@endsection