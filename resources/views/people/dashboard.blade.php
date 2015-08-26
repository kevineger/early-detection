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
        {{--CAROUSEL--}}
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('images/static/group.jpg') }}" alt="Group 2015">
                    <div class="carousel-caption">
                        <h1>Summer Research Group 2015</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/static/IKBSAS.jpg') }}" alt="IKBSAS">
                    <div class="carousel-caption">
                        <h1>I.K. Barber School of Arts & Sciences</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/static/IKBSAS_2.jpg') }}" alt="Kevin Eger & Duncan Szarmes">
                    <div class="carousel-caption">
                        <h1>Kevin Eger & Duncan Szarmes</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/static/group_2014.jpg') }}" alt="Group 2014">
                    <div class="carousel-caption">
                        <h1>Summer Research Group 2014</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/static/japan_2014.jpg') }}" alt="Japan 2014">
                    <div class="carousel-caption">
                        <h1>Japan 2014</h1>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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