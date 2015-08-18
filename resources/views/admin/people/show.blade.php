@extends('admin')

@section('content')
    <h1>People Show</h1>
    <ul>
        <li>Name: {{ $people->name }}</li>
        <li>Type: {{ $people->getType() }}</li>
        <li>Position: {{ $people->position }}</li>
        <li>Education: {{ $people->education }}</li>
        <li>Description: {{ $people->description }}</li>
        <li>Added to system: {{ $people->created_at->diffForHumans() }}</li>
    </ul>

    {{--Edit People--}}
    <a href="{{ action('PeoplesController@managePeopleEdit', ['people' => $people]) }}">
        {!! Form::button('Edit Person', ['class' => 'btn btn-info']) !!}
    </a>

    {{--Delete People--}}
    {!! Form::open(['route' => ['admin.peoples.destroy', $people], 'method' => 'DELETE', 'style'=>'display:inline-block']) !!}
        {!! Form::submit('Delete Person', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection