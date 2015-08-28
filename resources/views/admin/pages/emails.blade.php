@extends('admin')

@section('content')
    <h1>Manage Emails</h1>
    {!! Form::open() !!}
    <div class="input-group form-group">
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email endpoint']) !!}
        <span class="input-group-btn">
    {!! Form::submit('Add Email', ['class' => 'btn btn-primary']) !!}
    </span>
    </div>
    {{--Print out any errors--}}
    @if ($errors->any())
        <ul class="alert alert-danger" style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::close() !!}
    <div class="col-md-8 col-md-offset-2">
        <table class="table sortable">
            <tr>
                <th>Email</th>
                <th>Remove</th>
            </tr>
            @foreach( $emails as $email )
                <tr>
                    <td>{{ $email->email }}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.emails.destroy', $email], 'method' => 'DELETE', 'style' => 'display:inline']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection