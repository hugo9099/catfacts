@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>

    <p>How many facts do you want?</p>

    <form action="/getfacts" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="quantity" class="sr-only">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="qty" placeholder="Enter quantity">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Get Facts</button>
    </form>

    <hr>

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
