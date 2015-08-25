@extends('admin')

@section('head')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@endsection

@section('content')

    <h1>Create a Project</h1>
    {!! Form::model($project = new App\Project, ['url' => 'admin/projects', 'files'=> true]) !!}
        @include('admin.project.form', ['submitButtonText' => 'Add Project'])
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