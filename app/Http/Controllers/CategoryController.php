<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


/**
 * Class ColorController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();

        return view('content.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Category();
        return view('content.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(Category::$rules);
        Category::create($request->all());
        return redirect()->route('categories.index')
            ->with('success', 'category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('content.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('content.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
