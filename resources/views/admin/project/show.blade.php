@extends('admin')

@section('content')
    <h1>Project Show</h1>
    <ul>
        <li>Name: {{ $project->name }}</li>
        <li>Desc: {{ $project->description }}</li>
        <li>Category: {{ $project->category->name }}</li>
        <li>Added to system: {{ $project->created_at->diffForHumans() }}</li>
    </ul>

    {{--Edit Project--}}
    <a href="{{ action('ProjectsController@manageProjectEdit', ['project' => $project]) }}">
        {!! Form::button('Edit Project', ['class' => 'btn btn-info']) !!}
    </a>

    {{--Delete Project--}}
    {!! Form::open(['route' => ['admin.projects.destroy', $project], 'method' => 'DELETE', 'style'=>'display:inline-block']) !!}
        {!! Form::submit('Delete Project', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection