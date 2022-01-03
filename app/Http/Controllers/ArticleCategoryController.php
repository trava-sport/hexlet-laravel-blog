<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('article_category.index', compact('articleCategories'));
    }

    // BEGIN
    public function show($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.show', compact('category'));
    }
}
