@extends('layout')
@section('title', 'History Transaction')
@section('content-title', 'History Transaction')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold">Categories</h6>
        <a class="btn btn-success m-1">New Item</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Transaction ID</th>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactiondetails as $transactiondetail)
                    <td>{{$transactiondetail -> id}}</td>
                    <td>{{$transactiondetail -> transaction_id}}</td>
                    <td>{{$transactiondetail -> item_id}}</td>
                    <td>{{$transactiondetail -> qty}}</td>
                    <td>{{$transactiondetail -> subtotal}}</td>
                    <td>
                        <button class="btn btn-success btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>  
                </tr>
                    @empty         
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection