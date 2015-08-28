@extends('app')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="page-container">
        <div class="row">
            <div class="col-sm-4">
                <div class="publication-info">
                    <i class="fa fa-newspaper-o"></i>
                    <a href="{{ url('/publications/abstracts-and-conference-proceedings') }}"><h3>Abstracts, Conference Proceedings and Commentaries</h3></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="publication-info">
                    <i class="fa fa-book"></i>
                    <a href="{{ url('/publications/theses') }}"><h3>Theses</h3></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="publication-info">
                    <i class="fa fa-users"></i>
                    <a href="{{ url('/publications/journals') }}"><h3>Peer-Reviewed Journal Articles</h3></a>
                </div>
            </div>
        </div>
    </div>
@endsection