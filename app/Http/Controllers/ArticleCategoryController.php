<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('article_category.index', compact('articleCategories'));
    }

    public function show($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = ArticleCategory::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:article_categories,name,' . $category->id,
            'description' => 'required|min:10',
            'state' => [
                'required',
                Rule::in(['draft', 'published']),
            ]
        ]);

        $category->fill($request->all());
        $category->save();
        return redirect()
            ->route('article_categories.index');
    }

    public function create()
    {
        $category = new ArticleCategory();
        return view('article_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:article_categories|max:100',
            'description' => 'required|min:10',
            'state' => [
                Rule::in(['draft', 'published']),
            ]
        ]);

        $category = new ArticleCategory();
        $category->fill($request->all());
        $category->save();

        return redirect()
            ->route('article_categories.index');
    }
}
