{{--Name--}}
<div class="form-group">
    {!! Form::text('name', $publication->name, ['placeholder' => 'Enter Publication Name', 'class' => 'form-control']) !!}
</div>
{{--Type--}}
<div class="form-group">
    {!! Form::select('publication_type', $publication_type, null, ['id' => 'publication_type', 'class' => 'form-control js-tags']) !!}
</div>
{{--URL--}}
<div class="form-group">
    {!! Form::text('url', $publication->url, ['placeholder' => 'Enter External URL', 'class' => 'form-control']) !!}
</div>
{{--Reference--}}
<div class="form-group">
    {!! Form::textarea('reference', $publication->reference, ['placeholder' => 'Enter Reference (MLA/APA)', 'class' => 'form-control']) !!}
</div>
{{--Date--}}
<div class="form-group">
    {!! Form::date('date', \Carbon\Carbon::now()) !!}
</div>

<br>
{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

@section('footer')
    <script>
        $(".js-tags").select2({
            tags: true,
            placeholder: 'Select Publication Type'
        })
    </script>
@endsection
