@extends('app')

@section('content')
    <h1>Projects</h1>
    <div class="row">
        @foreach ( $project_categories as $category )
            <div class="col-md-6">
                <h3>{{ $category->name }}</h3>
                @foreach( $category->projects as $project )
                    <p><a href="{{ action('ProjectsController@show', [$project]) }}">{{ $project->name }}</a></p>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection