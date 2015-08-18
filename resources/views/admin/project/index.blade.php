@extends('admin')

@section('content')
    <h1>Manage Project Index</h1>
    <ul>
        @foreach($projects as $project)
            <li>Name: <a href="{{ action('ProjectsController@manageProjectShow', [$project]) }}">{{ $project->name }}</a></li>
        @endforeach
    </ul>
@endsection