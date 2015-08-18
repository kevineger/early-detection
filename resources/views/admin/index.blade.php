@extends('admin')

@section('content')
    <h1>Admin Panel</h1>
    <ul>
        <li><a href="{{ url('/admin/peoples') }}">Manage People</a></li>
        <li><a href="{{ url('/admin/projects') }}">Manage Projects</a></li>
        <li><a href="{{ url('/admin/publications') }}">Manage Publications</a></li>
        <li><a href="{{ url('admin/pages') }}">Manage Static Pages</a></li>
    </ul>
@endsection