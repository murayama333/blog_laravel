@extends('layout')
 
@section('content')
    <h3>Edit Article</h3>
 
    {!! Form::model($article, ['method' => 'PATCH', 'route' => ['articles.update', $article->id]]) !!}
        @include('articles/partials/_form', ['submit_text' => 'Edit Article'])
    {!! Form::close() !!}
@endsection
