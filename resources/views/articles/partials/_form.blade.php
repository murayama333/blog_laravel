<!-- /resources/views/projects/partials/_form.blade.php -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::text('text') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
 