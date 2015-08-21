@extends('app')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="page-container">
        <div class="row">
            <div class="col-lg-12">
                <h2>The Faces of Early Detection</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="people-info">
                    <i class="fa fa-briefcase"></i>
                    <a href="{{ url('/peoples/current-staff') }}"><h3>Current Staff</h3></a>
                    <a href="{{ url('/peoples/past-staff') }}"><h3>Past Staff</h3></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="people-info">
                    <i class="fa fa-graduation-cap"></i>
                    <a href="{{ url('/peoples/current-students') }}"><h3>Current Students</h3></a>
                    <a href="{{ url('/peoples/past-students') }}"><h3>Past Students</h3></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="people-info">
                    <i class="fa fa-users"></i>
                    <a href="{{ url('/peoples/partners') }}"><h3>Partners</h3></a>
                </div>
            </div>
        </div>
    </div>
@endsection