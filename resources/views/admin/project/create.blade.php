@extends('admin')

@section('content')

    <h1>Create a Project</h1>
    {!! Form::model($project = new App\Project, ['url' => 'admin/projects', 'files'=> true]) !!}
        @include('admin.project.form', ['submitButtonText' => 'Add Person'])
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