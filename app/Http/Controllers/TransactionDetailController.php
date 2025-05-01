<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Item;
use App\Models\Category;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactiondetails = transactionDetail::all();
        return view('historyTransaction', compact('transactiondetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
      
        TransactionDetail::create([
            'name' => $request->name
        ]);
        // return redirect()->back()->with('success', 'Category created successfully');
        return redirect()->route('transactiondetail.index')->with('success', 'Transaksi Detail sudah dibikin');
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionDetail $transactionDetail)
    {
        $transactionDetail->delete();
        return redirect()->route('transactionDetail.index')->with('success', 'Transaction Detail dihapus');
        // return redirect()->back()->with('success', 'Item deleted successfully');
    }
}