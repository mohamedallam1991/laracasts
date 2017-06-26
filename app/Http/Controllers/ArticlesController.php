<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;


class ArticlesController extends Controller {

	//
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show ($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create ()
    {
        return view('articles.create');
    }

    /**
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store (CreateArticleRequest $request)
    {
        Auth::user()->articles()->create($request->all());
        return redirect('articles');
    }
    public function edit ($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update ($id, CreateArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');


    }


}
