@extends('app')

@section('content')
    <h2>Partners</h2>
    <div class="row">
        @foreach( array_chunk($peoples->all(), 3) as $row )
            <div class="row">
                @foreach( $row as $people )
                    <div class="col-sm-4">
                        <h4>{{ $people->name }}</h4>
                        <ul>
                            <li>@if($people->description)  Contribution: {{ $people->description }}  @endif</li>
                            @foreach( $people->links as $link )
                                <li><a href="{{ $link->link }}">Link</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection