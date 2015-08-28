@section('head')
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
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

{{--Projects--}}
<div class="form-group">
    {!! Form::select('project_list[]', $projects, $people->projects->lists('id')->toArray(), ['id' => 'project_list', 'class' => 'form-control', 'multiple']) !!}
</div>

{{--Education--}}
<div class="form-group">
    {!! Form::textarea('education', $people->education, ['placeholder' => 'Enter Education (Separate multiple institutions with new line)', 'class' => 'form-control', 'rows' => 5]) !!}
</div>

{{--Description--}}
<div class="form-group">
    {!! Form::textarea('description', $people->description, ['placeholder' => 'Enter Description', 'class' => 'form-control']) !!}
</div>
<div id="upload">
    <div class="row">
        <div class="col-sm-3">
            @if( $people->image == null || $people->image === "placeholder.jpg" )
                {{--Image Upload--}}
                <h3>Thumbnail Image</h3>
                <label>Select image to upload:</label>
                {!! Form::file('image') !!}
            @else
                <div class="form-group">
                    <img style="height:200px" src="{{ asset('images/' . $people->image) }}"
                         alt="{{ $people->name }} . image">
                    <a id="change_image" class="btn btn-default">Change image</a>
                </div>
            @endif
        </div>
        <div class="col-sm-3">
            @if( $people->image2 == null || $people->image2 === "placeholder2.png" )
                {{--Image Upload--}}
                <h3>Action Image</h3>
                <label>Select image to upload:</label>
                {!! Form::file('image2') !!}
            @else
                <div class="form-group">
                    <img style="height:200px" src="{{ asset('images/' . $people->image2) }}"
                         alt="{{ $people->name }} . image">
                    <a id="change_image" class="btn btn-default">Change image</a>
                </div>
            @endif
        </div>
    </div>
</div>

<br>

{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

@section('footer')
    <script type="text/javascript">
        $('#type').select2({
            placeholder: 'Select Type'
        });
        $('#project_list').select2({
            placeholder: 'Select Projects'
        });
    </script>
    <script>
        $(document).ready(function () {
            var add_button = $("#change_image");
            var wrapper = $("#upload");

            $(add_button).click(function (e) {
                e.preventDefault();
                $(wrapper).append('<h3>Image Upload</h3><label>Select image to upload:</label>{!! Form::file('image') !!}');
                $(add_button).parent().remove();
            })
        })
    </script>
@endsection