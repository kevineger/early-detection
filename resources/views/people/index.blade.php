@extends('app')

@section('content')
    <div class="people-container">

    </div>
    <div class="row">
        @foreach( $peoples as $people )
            <a class="link" href="{{ action('PeoplesController@show', [$people]) }}">
                <div class="col-sm-3 col-xs-6">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <!-- front content -->
                                <img src="{{ asset('images/' . $people->image) }}" alt="image">
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <h2>{{ $people->name }}</h2>
                                <h3>{{ $people->position }}</h3>
                                <h4>{!! nl2br($people->education) !!}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            var height = $('.front').first().css("height");
            $('.link').css("height", height);
        })
    </script>
@endsection