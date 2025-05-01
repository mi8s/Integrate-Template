<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = transaction::all();
        return view('transaction', compact('transactions'));
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
        ],
        [
            'name.required' => 'Category name is required',
            'name.max' => 'Category name must not exceed 20 characters',
            'name.min' => 'Category name must be at least 2 characters',
        ]);

        $message = [[
            'required' => 'isi semua kolomnya ya teman',
            'max' => 'kolom ini tidak boleh lebih dari 20 karakter',
            'min' => 'kolom ini tidak boleh kurang dari 2 karakter',
        ]];
      
        Transaction::create([
            'name' => $request->name
        ]);
        // return redirect()->back()->with('success', 'Category created successfully');
        return redirect()->route('transaction.index')->with('success', 'Transaksi sudah dibikin');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transaction.index')->with('success', 'Transaction dihapus');
        // return redirect()->back()->with('success', 'Item deleted successfully');
    }
}