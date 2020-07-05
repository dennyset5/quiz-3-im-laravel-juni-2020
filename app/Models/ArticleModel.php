<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

function slug($judul){
    $input = strtolower($judul);
    $input = explode(" ",$input);
    $input = implode("-",$input);
    return $input;
}

class ArticleModel {

    public static function get_all(){
        $article = DB::table('article')->get();
        return $article;
    }

    public static function store($request,$user_id=1){
        // set kolom user_id, kolom slug, dan unset token
        $request['user_id']=$user_id;
        $request['slug']=slug($request['judul']);
        unset($request['_token']);

        // masukkan ke database
        $article = DB::table('article')->insert($request);
        return $article;
    } 

    public static function show_by_id($article_id){
        $article = DB::table('article')->where('id','=',$article_id)->first();
        return $article;
    }

    public static function update($request,$article_id){
        // set kolom slug dan unset token and method
        $request['slug']=slug($request['judul']);
        unset($request['_token']);
        unset($request['_method']);

        // masukkan ke database
        $article = DB::table('article')->where('id','=',$article_id)->update($request);
        return $article;
    }

    public static function destroy($article_id){
        $article = DB::table('article')->where('id','=',$article_id)->delete();
        return $article_id;
    }
}