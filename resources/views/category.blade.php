@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
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
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    @forelse ($categories as $category)
                    <td>{{$category -> id}}</td>
                    <td>{{$category -> name}}</td>
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