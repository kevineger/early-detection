@extends('admin')

@section('content')
    <h1>Edit a person</h1>
    {!! Form::model($people, ['method' => 'PATCH', 'action' => ['PeoplesController@managePeopleUpdate', $people], 'files' => true]) !!}
        @include('admin.people.form', ['submitButtonText' => 'Edit Person'])
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