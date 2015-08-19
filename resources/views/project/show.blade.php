@extends('app')

@section('content')
    <h1>{{ $project->name }}</h1>
    <h3>Added to system {{ $project->created_at->diffForHumans() }}</h3>
@endsection