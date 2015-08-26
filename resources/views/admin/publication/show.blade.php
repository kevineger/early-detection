@extends('admin')

@section('content')
    <h1>Publication Show</h1>
    <ul>
        <li>Name: {{ $publication->name }}</li>
        <li>Desc: {{ $publication->reference }}</li>
        <li>Link: {{ $publication->url }}</li>
        <li>Date: {{ $publication->date }}</li>
        <li>Added to system: {{ $publication->created_at->diffForHumans() }}</li>
    </ul>

    {{--Edit Publication--}}
    <a href="{{ action('PublicationsController@managePublicationEdit', ['publication' => $publication]) }}">
        {!! Form::button('Edit Publication', ['class' => 'btn btn-info']) !!}
    </a>

    {{--Delete Publication--}}
    {!! Form::open(['route' => ['admin.publications.destroy', $publication], 'method' => 'DELETE', 'style'=>'display:inline-block']) !!}
        {!! Form::submit('Delete Publication', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection