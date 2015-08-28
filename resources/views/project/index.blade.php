@extends('app')

@section('content')
    <h1>Projects</h1>
    <div class="row">
        @foreach ( $project_categories as $key => $category )
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <a data-toggle="collapse" data-target="#collapse_{{ $key }}" href="#collapse_{{ $key }}" aria-expanded="false" aria-controls="collapse_{{ $category->name }}"><h3>{{ $category->name }}</h3></a>
                <div class="collapse" id="collapse_{{ $key }}">
                    <div class="well">
                        @foreach( $category->projects as $project )
                            <p><a href="{{ action('ProjectsController@show', [$project]) }}">{{ $project->name }}</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection