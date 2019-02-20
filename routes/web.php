<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/{id}','UserController@create');

Route::get('/show/{id}','UserController@show');

Route::get('/delete/{id}','UserController@destroy');

Route::get('/profile/{user_id}','UserController@profile');

Route::get('/create/article/{id}','ArticleController@create');

Route::get('/show/articles/{id}','ArticleController@show');

Route::get('/article/{idArticulo}/writer/{idEscritor}/delete','ArticleController@delete');

Route::get('/articles','ArticlesController@show');

Route::get('/article/{idArticulo}/tag/{idTag}','ArticlesController@create');

Route::get('/article/tag/{idTag}','ArticlesController@show');

Route::get('/article/{idArticle}/tag/{idTag}/delete','ArticlesController@deleteTag');