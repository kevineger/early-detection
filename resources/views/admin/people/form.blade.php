@section('head')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <script src="{{ asset('js/webtoolkit.aim.js') }}" type="text/javascript"><!--mce:0--></script>
    <script type="text/javascript"><!--mce:1--></script>
@endsection

{{--Name--}}
<div class="form-group">
    {!! Form::text('name', $people->name, ['placeholder' => 'Enter Name', 'class' => 'form-control']) !!}
</div>

{{--Type--}}
<div class="form-group">
    {!! Form::select('type', $type_list, null, ['id' => 'type', 'class' => 'form-control']) !!}
</div>

{{--Position--}}
<div class="form-group">
    {!! Form::text('position', $people->position, ['placeholder' => 'Enter Position', 'class' => 'form-control']) !!}
</div>


{{--Education--}}
<div class="form-group">
    {!! Form::text('education', $people->education, ['placeholder' => 'Enter Education', 'class' => 'form-control']) !!}
</div>

{{--Description--}}
<div class="form-group">
    {!! Form::textarea('description', $people->description, ['placeholder' => 'Enter Description', 'class' => 'form-control']) !!}
</div>

{{--Image Upload--}}
<h3>Image Upload</h3>
<label>Select image to upload:</label>
{!! Form::file('image') !!}

<br>

{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

@section('footer')
    <script type="text/javascript">
        $('#type').select2();
    </script>
@endsection