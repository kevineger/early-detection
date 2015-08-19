@extends('app')

@section('content')
    <h1>Project Index</h1>
    <ul>
        @foreach( $projects as $project )
            <li><a href="{{ action('ProjectsController@show', [$project]) }}">{{ $project->name }}</a></li>
        @endforeach
    </ul>
@endsection