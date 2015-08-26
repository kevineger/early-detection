@extends('admin')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="{{ asset('js/sorttable.js') }}"></script>
@endsection

@section('content')
    <h1>Manage Publications</h1>
    <div class="col-sm-3">
        {!! Form::open(array('url' => 'admin/publications', 'method' => 'put')) !!}
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
            <th>Publication Date</th>
            <th>Date Added</th>
            <th style="width: 110px;">Actions</th>
            @foreach($publications as $publication)
                <tr>
                    <td>
                        <a href="{{ action('PublicationsController@managePublicationShow', [$publication]) }}">{{ $publication->name }}</a>
                    </td>
                    <td>
                        <p>{{ $publication->date }}</p>
                    </td>
                    <td>
                        <p>{{ $publication->created_at }}</p>
                    </td>
                    <td>
                        <a href="{{ action('PublicationsController@managePublicationEdit', [$publication]) }}" class="btn btn-info"><i class="fa fa-pencil fa-lg"></i></a>
                        {!! Form::open(['route' => ['admin.publications.destroy', $publication], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection