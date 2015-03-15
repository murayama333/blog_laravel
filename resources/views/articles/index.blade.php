@extends('layout')

@section('content')
<h3>List Article</h3>
<ul>
@foreach($articles as $article)
	<li>
		{!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
			{{{$article->title}}} /
			 {!! link_to_route('articles.show', 'show', array($article->id)) !!} /
			 {!! link_to_route('articles.edit', 'edit', array($article->id)) !!} /
	         {!! Form::submit('Delete') !!}
	    {!! Form::close() !!}
	</li>
@endforeach
</ul>
@stop

@section('footer')
{!! link_to_route('articles.create', 'create') !!}
@endsection