@extends('layout')
 
@section('content')
    <h3>Create Article</h3>
 
    {!! Form::model($article, ['route' => ['articles.store']]) !!}
        @include('articles/partials/_form', ['submit_text' => 'Create Article'])
    {!! Form::close() !!}

@endsection

@section('footer')
{!! link_to_route('articles.index', 'back') !!}
@endsection