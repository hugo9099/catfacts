@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>

    <p>How many facts do you want?</p>

    {!! Form::open(['action' => 'PagesController@getfacts', 'method' => 'POST', 'class' => 'form-inline']) !!}
    <div class="form-group mb-2">
        {{Form::label('quantity', 'Quantity:')}}
        {{Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => 'Up to 100'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary mb-2'])}}
    {!! Form::close() !!}

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

    <?php
    $text ='';

    if(count($facts) > 0) {
        $text .= '<h3>Cat Facts</h3>';
        $text .= '<ul class="list-group">';
        foreach($facts as $fact) {
            $text .= '<li class="list-group-item">';
            $text .= $fact->fact;
            $text .= '</li>';
        }
    }
    ?>

    <hr>

    {!! Form::open(['action' => 'PagesController@pdf', 'method' => 'POST', 'class' => 'form-inline']) !!}
        <div class="form-group mb-2">
            {{Form::hidden('data', $text, ['class' => 'form-control hidden'])}}
            {{Form::submit('Download PDF', ['class'=>'btn btn-success mb-2 '])}}
        </div>
    {!! Form::close() !!}

    <hr>

@endsection
