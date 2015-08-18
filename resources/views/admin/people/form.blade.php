{{--Name--}}
{!! Form::text('name', $people->name, ['placeholder' => 'Enter Name']) !!}
<br>

{{--Type--}}
{!! Form::text('type', $people->type, ['placeholder' => 'Enter Person Type']) !!}
<br>

{{--Position--}}
{!! Form::text('position', $people->position, ['placeholder' => 'Enter Position']) !!}
<br>

{{--Education--}}
{!! Form::text('education', $people->education, ['placeholder' => 'Enter Education']) !!}
<br>

{{--Description--}}
{!! Form::textarea('description', $people->description, ['placeholder' => 'Enter Description']) !!}
<br>

<br>
{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>