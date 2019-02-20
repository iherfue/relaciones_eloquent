<?php

namespace App\Http\Controllers;
use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(){

        $article = Tag::find(2);
        dd($article);
    }

    public function create($idArticulo,$idTag){

        /*$articulo = new Article;
        $articulo->nombre = 'Articulo3';
        $articulo->save();*/

        $articulo = Article::find($idArticulo);
        $tag = Tag::find($idTag);
        $articulo->tags()->attach($tag);
    }
}
