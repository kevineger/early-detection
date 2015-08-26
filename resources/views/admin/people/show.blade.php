@extends('admin')

@section('content')
    <h1>People Show</h1>
    <ul>
        <li>Name: {{ $people->name }}</li>
        <li>Type: {{ $people->getTextType() }}</li>
        <li>Position: {{ $people->position }}</li>
        <li>Education: {{ $people->education }}</li>
        @foreach( $people->projects as $project )
            <li>Project: {{ $project->name }}</li>
        @endforeach
        <li>Description: {{ $people->description }}</li>
        <li>Added to system: {{ $people->created_at->diffForHumans() }}</li>
    </ul>

    {{--Edit People--}}
    {!! link_to_action('PeoplesController@managePeopleEdit', 'Edit', ['people' => $people], ['class' => 'btn btn-info']) !!}

    {{--Delete People--}}
    {!! Form::open(['route' => ['admin.peoples.destroy', $people], 'method' => 'DELETE', 'style'=>'display:inline-block']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection