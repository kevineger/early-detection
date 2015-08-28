@extends('admin')

@section('content')
    <h1>Manage Static Pages</h1>
    <h2><a href="{{ url('admin/pages/research') }}">Research Opportunities</a></h2>
    <h2><a href="{{ url('admin/pages/emails') }}">Contact (email endpoints)</a></h2>
@endsection