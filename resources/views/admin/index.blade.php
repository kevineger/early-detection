@extends('admin')

@section('content')
    <h1>Admin Panel</h1>
    <ul>
        <li><a href="{{ url('/admin/peoples') }}">Manage People</a></li>
        <li><a href="{{ url('/admin/projects') }}">Manage Projects</a></li>
        <li><a href="{{ url('/admin/publications') }}">Manage Publications</a></li>
        <li><a href="{{ url('admin/pages') }}">Manage Static Pages</a></li>
    </ul>
    <div class="row">
        <div class="btn-group">
            <a class="btn btn-default" href="{{ url('admin/peoples/create') }}">Add Person</a>
            <a class="btn btn-default" href="{{ url('admin/projects/create') }}">Add Project</a>
            <a class="btn btn-default" href="{{ url('admin/publications/create') }}">Add Publication</a>
        </div>
    </div>
@endsection