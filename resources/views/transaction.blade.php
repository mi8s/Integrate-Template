@extends('layout')
@section('title', 'Transaction')
@section('content-title', 'Transaction')
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
                        <th>User ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Pay Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @forelse ($transactions as $transaction)
                            <td>{{$transaction -> id}}</td>
                            <td>{{$transaction -> user_id}}</td>
                            <td>{{$transaction -> date}}</td>
                            <td>{{$transaction -> total}}</td>
                            <td>{{$transaction -> pay_total}}</td>
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