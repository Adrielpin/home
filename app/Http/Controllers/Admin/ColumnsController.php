<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use Storage;

use App\Models\Tag;
use App\Models\Author;
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
        
        $articles = Article::all();
        return view('admin.columns.index')->with(['articles' => $articles]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tags = Tag::orderby('name')->lists('name','id');
        $authors = Author::orderby('name')->lists('name','id');
        return view('admin.columns.create')->with(['tags' => $tags, 'authors' => $authors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $url = strtr($request->title, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ", "aaaaeeiooouucAAAAEEIOOOUUC");

        $article = new Article();
        $article->url = strtolower(str_replace(' ','-', $url));
        $article->title = $request->title;
        $article->text = $request->conteudo;
        $article->tag_id = $request->tag;
        $article->author_id = $request->author;
        $article->save();

        $files = $request->file('images');
        
        foreach ($files as $k => $file) {

            $p = new Articles_photo();
            $p->article_id = $article->id;
            $p->name = date('Y_m_d_His').'_'.$file->getClientOriginalName();
            $p->save();

            Storage::disk('public')->put('columns/' .  date('Y_m_d_His').'_'.$file->getClientOriginalName(), file_get_contents($file));
            
        }

         $request->session()->flash('alert-success', 'Artigo cadastrado com sucesso.');

        return redirect('admin/columns/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::orderby('name')->lists('name','id');
        $authors = Author::orderby('name')->lists('name','id');

        $article = Article::find($id);

        return view('admin.columns.edit')->with(['article' => $article, 'tags' => $tags, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $u = Article::find($id);
        $u->delete();

        Session::flash('message', 'Artigo removido!');

        return redirect('admin/columns/');

    }

    public function preview(Request $request)
    {

        $title = $request->title;
        $conteudo = $request->conteudo;

        dd(conteudo);

        return view('admin.columns.create')->with(['tags' => $tags, 'authors' => $authors]);

    }

    public function removePhoto($id)
    {
        
    }
}
