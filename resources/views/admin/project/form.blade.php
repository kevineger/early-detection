{{--Name--}}
<div class="form-group">
{!! Form::text('name', $project->name, ['placeholder' => 'Enter Project Name', 'class' => 'form-control']) !!}
</div>
{{--Category--}}
<div class="form-group">
    {!! Form::select('project_category_id', $category_list, null, ['id' => 'project_category_id', 'class' => 'form-control js-tags']) !!}
</div>

<br>
{{--Submit--}}
<div class="btn-group">
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>