@extends('admin')

@section('head')
    <link href="https://cdn.rawgit.com/fengyuanchen/cropper/v0.11.1/dist/cropper.min.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/fengyuanchen/cropper/v0.11.1/dist/cropper.min.js"></script>
@endsection

@section('content')
    {!! Form::open() !!}
    <div style="width: 100%;">
        <div id="cropper">
            <img src="{{ asset('images/' . $image) }}" alt="Picture">
        </div>
    </div>
    {{--Hidden fields for submitting position and size--}}
    {!! Form::hidden('xPos', null, ['id' => 'xPos']) !!}
    {!! Form::hidden('yPos', null, ['id' => 'yPos']) !!}
    {!! Form::hidden('width', null, ['id' => 'width']) !!}
    {!! Form::hidden('height', null, ['id' => 'height']) !!}
    <div class="form-group">
        <div class="btn-group">
            {!! Form::submit('Crop', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            var $image = $('#cropper > img'),
                    cropBoxData,
                    canvasData;

            $image.cropper({
                aspectRatio: 1,
                autoCropArea: 0.5,
                rotatable: true,
                minContainerWidth: 800,
                minContainerHeight: 800,
                crop: function (e) {
                    // Output the result data for cropping image.
                    $('#xPos').val(e.x);
                    $('#yPos').val(e.y);
                    $('#width').val(e.width);
                    $('#height').val(e.height);
                }
            });
        });
    </script>
@endsection