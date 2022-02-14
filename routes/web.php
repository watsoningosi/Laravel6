<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
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
Route::get('/create', function () {
    return view('create');
});
Route::post('/create', function () {
    Article::create([
        'title' => request('title'),
        'body' => request('body')

    ]);
    return redirect('/create');
});
/*
Route::post('/create', function () {
    $article = new article();
    $article->title = request('title');
    $article->body = request('body');
    $article->save();
});
*/
