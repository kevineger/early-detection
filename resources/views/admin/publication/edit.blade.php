@extends('admin')

@section('head')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@endsection

@section('content')
    <h1>Edit a Publication</h1>
    {!! Form::model($publication, ['method' => 'PATCH', 'action' => ['PublicationsController@managePublicationUpdate', $publication]]) !!}
        @include('admin.publication.form', ['submitButtonText' => 'Edit Publication'])
    {!! Form::close() !!}

    {{--Print out any errors--}}
    @if ($errors->any())
        <ul class="alert alert-danger" style="list-style-type: none">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('footer')
    <script>
        $(".js-tags").select2({
            tags: true
        })
    </script>
@endsection