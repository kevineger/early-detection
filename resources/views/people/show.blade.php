@extends('app')

@section('content')
    <div class="people-bio">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $people->name }}</h1>

                <h3>{{ $people->education }}</h3>

                <p class="subtitle" style="float:left">{{ $people->getTextType() }} | {{ $people->position }}</p>
            </div>
            <div class="col-lg-7">
                <p class="description">{{ $people->description }}</p>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                        <img src="{{ asset('images/' . $people->image) }}" alt="image">
                    </div>
                </div>
                @foreach ( $people->projects as $project )
                    <p><strong>Project:</strong> {{ $project->name }}</p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <img src="{{ asset('images/' . $people->image2) }}" alt="image">
            </div>
        </div>
        <p class="system-info">Added to System: {{ $people->created_at->diffForHumans() }}</p>
    </div>
@endsection