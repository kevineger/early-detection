@extends('admin')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="{{ asset('js/sorttable.js') }}"></script>
@endsection

@section('content')
    <h1>Manage Projects</h1>
    <div class="col-sm-3">
        {!! Form::open(array('url' => 'admin/projects', 'method' => 'put')) !!}
        <div class="form-group">
            {!! Form::label('search', 'Name') !!}
            {!! Form::text('search', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-sm-9">
        <table class="table sortable">
            <th>Name</th>
            <th>Category</th>
            <th style="width: 110px;">Actions</th>
            @foreach($projects as $project)
                <tr>
                    <td>
                        <a href="{{ action('ProjectsController@manageProjectShow', [$project]) }}">{{ $project->name }}</a>
                    </td>
                    <td>{{ $project->category->name }}</td>
                    <td>
                        <a href="{{ action('ProjectsController@manageProjectEdit', [$project]) }}" class="btn btn-info"><i class="fa fa-pencil fa-lg"></i></a>
                        {!! Form::open(['route' => ['admin.projects.destroy', $project], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection