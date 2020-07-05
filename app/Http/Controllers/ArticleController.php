<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArticleModel;

class ArticleController extends Controller
{   
    public function show(){
        $article = ArticleModel::get_all();
        return view('article',compact('article'));
    }

    public function show_by_id($article_id){
        $article = ArticleModel::show_by_id($article_id);
        return view('article_id',compact('article'));
    }

    public function form_create(){
        return view('create_article');
    }

    public function store(Request $request){
        $article = ArticleModel::store($request->all());
        return redirect('/artikel');
    }

    public function form_edit($article_id){
        $article = ArticleModel::show_by_id($article_id);
        return view('edit_article',compact('article'));
    }

    public function update($article_id,Request $request){
        $article = ArticleModel::update($request->all(),$article_id);
        return redirect('/artikel');
    }

    public function destroy($article_id){
        $article = ArticleModel::destroy($article_id);
        return redirect('/artikel');
    }

}
