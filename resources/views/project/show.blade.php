@extends('app')

@section('content')
    <div class="people-bio">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $project->name }}</h1>
            </div>
            <div class="col-lg-7">
                <p class="description">{!! nl2br($project->description) !!}</p>
            </div>
            <div class="col-lg-5">
                @if( count($project->peoples) > 1)<h2 style="text-align:center">Students working
                    on {{ $project->name }}</h2>
                @else
                    <h2 style="text-align:center">Student working on {{ $project->name }}</h2>
                @endif

                @foreach ( $project->peoples as $people )
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                            <img src="{{ asset('images/' . $people->image) }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <a href="{{ action('PeoplesController@show', [$people]) }}"><h4
                                    style="text-align: center">{{ $people->name }}</h4></a>
                    </div>
                @endforeach
            </div>
        </div>
        <p class="system-info">Added to System: {{ $people->created_at->diffForHumans() }}</p>
    </div>
@endsection