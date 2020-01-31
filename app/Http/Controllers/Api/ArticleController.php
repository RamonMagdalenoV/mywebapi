<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json(Article::all(), 200);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return response()->json($article, 200);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function destroy(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return response()->json($article, 204);
    }
}
