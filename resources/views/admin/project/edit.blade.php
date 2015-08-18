@extends('admin')

@section('content')
    <h1>Edit a Project</h1>
    {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@manageProjectUpdate', $project]]) !!}
        @include('admin.project.form', ['submitButtonText' => 'Edit Project'])
    {!! Form::close() !!}

    {{--Print out any errors--}}
    @if ($errors->any())
        <ul class="alert alert-danger" style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection