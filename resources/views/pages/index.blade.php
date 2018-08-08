
@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
<h1>{{$title}}</h1>
    <p>This is a laravel application from the the laravel from scratch</p> 
    <p><a class="btn btn-info btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>  
@endsection


