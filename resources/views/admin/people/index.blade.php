@extends('admin')

@section('content')
    <h1>Manage People Index</h1>
    <ul>
        @foreach($peoples as $people)
            <li>Name: <a href="{{ action('PeoplesController@managePeopleShow', [$people]) }}">{{ $people->name }}</a></li>
        @endforeach
    </ul>
    
@endsection