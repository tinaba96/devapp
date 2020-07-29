<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/archives/', function(){
    //return '記事一覧';
    return view('archives.index');
});


Route::get('/archives/{category}/', function($category){
    return view('archives.category', ['category' => $category]);
});

Route::post('/join/', function(){
    return '入会申し込み完了';
});

Routes::get('/sum/{x}/{y}/', function($x, $y) {
  return view('sum', ['x'=>$x, 'y'=>$y]);
});

Route::get('/join/', function(){
  return redirect() -> to('/');
});

Route::get('/{id}/', function($id){
    return $id . 'のページ';
});


