<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;
use Input;
use Redirect;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response	 
	 */
	public function index()
	{
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$article = new Article();
		return view('articles.create', compact('article'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		Article::create($input);
 		return Redirect::route('articles.index')->with('message', 'Article created');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::find($id);
		return view('articles.show', compact('article'));
	}

//	/**
//	 * Display the specified resource.
//	 *
//	 * @param  \App\Article $article
//	 * @return Response
//	 */
//	public function show(Article $article)
//	{
//		return view('articles.show', compact('article'));
//	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$article = Article::find($id);
		return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');

		$article = Article::find($id);
		$article->update($input);
	 
		return Redirect::route('articles.show', $article->id)->with('message', 'Article updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();
		return Redirect::route('articles.index')->with('message', 'Article deleted.');
	}
}
