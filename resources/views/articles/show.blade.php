@extends('layout')
 
@section('content')
<h3>Show Article</h3>
<p>Title: {{{ $article->title }}}</p>
<p>Text: {{{ $article->text }}}</p>
@endsection

@section('footer')
{!! link_to_route('articles.index', 'back') !!}
@endsection