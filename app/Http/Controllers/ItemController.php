<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('item', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20|min:3',
            'price' => 'required|numeric',
            'stok' => 'required|numeric',
        ],
        [
            'name.required' => 'Category name is required',
            'name.string' => 'Category name must be a string',
            'price.required' => 'Price is required',
            'stok.required' => 'Stock is required',

            'name.max' => 'Category name must not exceed 20 characters',
            'name.min' => 'Category name must be at least 2 characters',
        ]);

        $message = [[
            'required' => 'isi semua kolomnya ya teman',
            'max' => 'kolom ini tidak boleh lebih dari 20 karakter',
            'min' => 'kolom ini tidak boleh kurang dari 2 karakter',
        ]];
      
        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'stok' => $request->stok
        ]);
        // return redirect()->back()->with('success', 'Category created successfully');
        return redirect()->route('item.index')->with('success', 'Item sudah dibikin');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('item.index')->with('success', 'Item dihapus');
        // return redirect()->back()->with('success', 'Item deleted successfully');
    }
}