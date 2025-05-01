@extends('layout')
@section('title', 'Item')
@section('content-title', 'Item')
@section('content')
@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

<div class="row">  
    <div class="col-md-8">  
        <div class="card shadow md-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold">Items</h6>
                <a href="{{ route('item.create') }}" class="btn btn-success">New Item</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$loop-> iteration}}</td>
                            <td>{{$item -> name}}</td>
                            <td>{{$item -> categories_id}}</td>
                            <td>{{$item -> price}}</td>
                            <td>{{$item -> stok}}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" onclick="edit({{ $item->id }})">Edit</a>
                                <form class="d-inline" action="{{ route('item.destroy', $item) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach                             
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">  <div class="card shadow mb-4">
        <div class="card-header py-3" style="display: flex; justify-content: space-between;">
            <h6 class="m-0 font-weight-bold">Form</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                @method('POST')
                
                <div class="form-group">
                    <label for="name">Name Item</label>
                    <input
                        class="form-control @error('name') is-invalid @enderror"
                        name="name"
                        type="text"
                        placeholder="name item"
                        value="{{ old('name') }}">
                    @error('name')
                        {{-- <div class="invalid-feedback"> --}}
                            <p class="alert alert-danger">Invalid Name Item</p>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group-2">
                    <label for="price">Price</label>
                    <input
                        class="form-control @error('price') is-invalid @enderror"
                        name="price"
                        type="integer"
                        placeholder="price"
                        value="{{ old('price') }}">
                    @error('price')
                        {{-- <div class="invalid-feedback"> --}}
                            <p class="alert alert-danger">Invalid Price</p>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group-3">
                    <br>
                    <label for="stok">Stock</label>
                    <input
                        class="form-control @error('stok') is-invalid @enderror"
                        name="stok"
                        type="integer"
                        placeholder="stok"
                        value="{{ old('stok') }}">
                    @error('stok')
                        {{-- <div class="invalid-feedback"> --}}
                            <p class="alert alert-danger">Invalid Stock</p>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-3">
                    <input class="btn btn-sm btn-success" type="submit" value="Save">
                    <input class="btn btn-sm btn-danger" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection