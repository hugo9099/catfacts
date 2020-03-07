@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Here you have some facts about cats.</p>

    @if(count($facts) > 0)
        <ul class="list-group">
            @foreach($facts as $fact)
                <li class="list-group-item">
                    {{$fact->fact}}
                </li>
            @endforeach
        </ul>
    @endif
@endsection
