<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Events\ArticleCreated;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        broadcast(new ArticleCreated($article))->toOthers();
        return response()->json(['message' => 'Article added successfully!']);
    }
}