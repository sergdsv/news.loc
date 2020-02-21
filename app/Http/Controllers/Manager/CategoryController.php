<?php

namespace App\Http\Controllers\Manager;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(5);
        return view('pages.manager.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.manager.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::make($request->only([
                'title'
            ]));
        $category->saveOrFail();
        return redirect()->route('manager.categories.index')->with(
            'message',
            "category create!"
        );
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('pages.manager.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect()->route('manager.categories.index')->with(
            'message',
            "Category edit!"
        );
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('manager.categories.index')->with(
            'message',
            "Post deleted!"
        );
    }
}
