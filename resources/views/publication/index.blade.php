@extends('app')

@section('content')
    <div class="row">
        @foreach( $publications as $key => $year )
            <div class="col-sm-6 col-sm-offset-3">
                <h2>{{ $key }}</h2>
                @foreach( $year as $publication )
                    <a href="{{ $publication->url }}"><h4>{{ $publication->name }}</h4></a>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection