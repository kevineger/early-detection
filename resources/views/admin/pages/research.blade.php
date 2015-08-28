@extends('admin')

@section('head')
    <script src="http://www.alohaeditor.org/download/aloha.min.js"></script>
@endsection

@section('content')
    {!! Form::open(['id' => 'submit_form']) !!}
    {!! Form::hidden('html', null, ['id' => 'html_form']) !!}
    {!! Form::hidden('html_default', $html_content->html_default, ['id' => 'html_default']) !!}
    <div class="btn-edit-group">
        {!! Form::button('Save Page', ['id' => 'save', 'class' => 'btn btn-primary']) !!}
        {!! Form::button('Reset Default', ['id' => 'reset', 'class' => 'btn btn-info']) !!}
    </div>
    {!! Form::close() !!}
    <div class="editable" id="page-html">
        {!! $html_content->html !!}
    </div>
@endsection

@section('footer')
    <script>
        aloha.dom.query('.editable', document).forEach(aloha);
        $('#save').click(function () {
            $('#html_form').val($('#page-html').html());
            $('#submit_form').submit();
        });
        $('#reset').click(function () {
            $('#page-html').html($('#html_default').val());
        });
    </script>
@endsection