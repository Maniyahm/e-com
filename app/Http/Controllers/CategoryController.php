<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]); 

        Category::create($request->all());

        return redirect()->route('category.home')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $categories = Category::all(); // For sidebar
    
        return view('category.show', [
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);     

        $category = Category::find($id);
        $category->update($request->all()); 

        return redirect()->route('category.home')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.home')->with('success', 'Category deleted successfully');   
    }
    
    /**
     * Display a frontend page with all categories.
     * (Add this new method to your controller)
     */
    public function home()
    {
        $categories = Category::all();
        return view('category.home', compact('categories'));
    }
}