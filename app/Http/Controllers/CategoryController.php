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
        $categories = Category::all(); // Pastikan use App\Models\Category; di atas
        return view('category', compact('categories'));
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
            'name' => 'required|string|max:20|min:3',
        ],
        [
            'name.required' => 'Category name is required',
            'name.string' => 'Category name must be a string',
            'name.max' => 'Category name must not exceed 20 characters',
            'name.min' => 'Category name must be at least 2 characters',
        ]);

        $message = [[
            'required' => 'isi semua kolomnya ya teman',
            'string' => 'kolom ini harus berupa string',
            'max' => 'kolom ini tidak boleh lebih dari 20 karakter',
            'min' => 'kolom ini tidak boleh kurang dari 2 karakter',
        ]];
      
        Category::create([
            'name' => $request->name
        ]);
        // return redirect()->back()->with('success', 'Category created successfully');
        return redirect()->route('category.index')->with('success', 'Kategori sudah dibikin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // $category = Category::find($category);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category dihapus');
    }
}