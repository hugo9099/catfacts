@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>Cat Facts Application</h2>
        <p>
            <a class="btn btn-info btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
        <br>
        <p>
            <a class="btn btn-primary btn-lg" href="/getfacts" role="button">Just Get me Some Facts!</a>
        </p>
    </div>
@endsection
