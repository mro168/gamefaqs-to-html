<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        if( empty($article) ) {
            // return redirect()->action('ArticleController@p404');
            return abort(404);
        } else {
            return view('article/show', ['content' => $article->content]);
        }
    }

    public function p404()
    {
        $content = "404 Not Found";
        return view('article/404', ['content' => $content]);
    }
}
