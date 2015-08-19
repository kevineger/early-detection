@extends('app')

@section('content')
    <h1>{{ $people->name }}</h1>
    <ul>
        <li>Type: {{ $people->getTextType() }}</li>
        <li>Position: {{ $people->position }}</li>
        <li>Education: {{ $people->education }}</li>
        <li>Description: {{ $people->description }}</li>
        <li>Added to System: {{ $people->created_at->diffForHumans() }}</li>
    </ul>
@endsection