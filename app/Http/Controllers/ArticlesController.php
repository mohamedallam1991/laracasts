<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use App\Tag;
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
        $tags = Tag::lists('name','id');

        return view('articles.create', compact('tags'));
    }

    /**
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store (CreateArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));

        session()->flash('flash_message', 'Article created');
        return redirect('articles');
    }
    public function edit ($id)
    {
        $article = Article::findOrFail($id);

        $tags = Tag::lists('name','id');

        return view('articles.edit', compact('article', 'tags'));
    }
    public function update ($id, CreateArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $article->tags()->sync($request->input('tag_list'));

        session()->flash('flash_message', 'Article Updated');

        return redirect('articles');


    }


}
