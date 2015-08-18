{{--Name--}}
{!! Form::text('name', $project->name, ['placeholder' => 'Enter Project Name']) !!}
<br>

<br>
{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>