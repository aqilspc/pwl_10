<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Storage;
use PDF;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index',compact('article'));
        //return $article;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $image = $request->file('image');
         if($image)
         {
            $image_name = $request->file('image')->store('images','public');
         }

         Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'featured_image'=>$image_name
         ]);

         return 'Artikel berhasil disimpan';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit',compact('article'));
        //return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        if($article->featured_image && file_exists(storage_path('app/public/'.$article->featured_image)))
        {
            Storage::delete('public/'.$article->featured_image);
        }
        $image_name = $request->file('image')->store('images','public');
        $article->featured_image = $image_name;
        $article->save();
        return 'Artikel berhasil diupdate';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $article = Article::find($id);
         $article->delete();
         return redirect()->back();
    }

    public function cetak_pdf()
    {
        $article = Article::all();
        $pdf = PDF::loadview('article.cetak_pdf',compact('article'));
        return $pdf->stream();
    }
}
