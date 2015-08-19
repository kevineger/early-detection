@extends('admin')

@section('content')
    <h1>Create a person</h1>
    {!! Form::model($people = new App\People, ['url' => 'admin/peoples', 'files'=> true]) !!}
        @include('admin.people.form', ['submitButtonText' => 'Add Person'])
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
@endsection