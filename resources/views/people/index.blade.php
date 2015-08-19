@extends('app')

@section('content')
    <h1>People Index</h1>
    <ul>
        @foreach( $peoples as $people )
            <li><a href="{{ action('PeoplesController@show', [$people]) }}">{{ $people->name }}</a></li>
        @endforeach
    </ul>
@endsection