<?php

use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('articles.index');
});

Route::post('/articles', [ArticleController::class, 'store']);