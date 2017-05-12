<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Articles_photo;


class ColumnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tags = Tag::all();

        $articles = Article::all();

        return view('web.colunas.index')->with(['tags' => $tags, 'articles' => $articles]);
    }

    public function tag($tag)
    {
        $tags = Tag::all();
        return view('web.colunas.tag')->with(['tags' => $tags]);    
    }

    public function post($tag, $post)
    {   

        $tags = Tag::all();

        $article = Article::where('url','=', $post)->get();

        return view('web.colunas.post')->with(['tags' => $tags, 'article' => $article]);    
    }

} 