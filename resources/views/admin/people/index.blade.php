@extends('admin')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="{{ asset('js/sorttable.js') }}"></script>
@endsection

@section('content')
    <h1>Manage People</h1>
    <div class="col-sm-2">
        {!! Form::open(array('url' => 'admin/peoples', 'method' => 'put')) !!}
        <div class="form-group">
            {!! Form::label('search', 'Name') !!}
            {!! Form::text('search', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('curr_student_checkbox') !!}
            {!! Form::label('curr_student_checkbox', 'Current Students') !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('past_student_checkbox') !!}
            {!! Form::label('past_student_checkbox', 'Past Students') !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('curr_staff_checkbox') !!}
            {!! Form::label('curr_staff_checkbox', 'Current Staff') !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('past_staff_checkbox') !!}
            {!! Form::label('past_staff_checkbox', 'Past Staff') !!}
        </div>
        <div class="form-group">
            {!! Form::checkbox('partner_checkbox') !!}
            {!! Form::label('partner_checkbox', 'Partners') !!}
        </div>
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        <br>
        <div class="btn-group">
            <a class="btn btn-default" href="{{ url('admin/peoples/create') }}">Add Person</a>
        </div>
    </div>
    <div class="col-sm-10">
        <table class="table sortable">
            <th>Name</th>
            <th>Type</th>
            <th>Position</th>
            <th>Actions</th>
            @foreach( $peoples as $people )
                <tr>
                    <td><a href="{{ action('PeoplesController@managePeopleShow', [$people]) }}">{{ $people->name }}</a>
                    </td>
                    <td>{{ $people->getTextType() }}</td>
                    <td>{{ $people->position }}</td>
                    <td><a href="{{ action('PeoplesController@managePeopleEdit', [$people]) }}" class="btn btn-info"><i
                                    class="fa fa-pencil fa-lg"></i></a>
                        {!! Form::open(['route' => ['admin.peoples.destroy', $people], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection