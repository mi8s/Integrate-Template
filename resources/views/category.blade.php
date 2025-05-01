@extends('layout')
@section('title', 'Category')
@section('content-title', 'Category')
@section('content')
@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

<div class="row">  
    <div class="col-md-8">  
        <div class="card shadow md-4">
            <div class="card-header py-3" style="display: flex; justify-content: space-between;">
                <h6 class="m-0 font-weight-bold">Categories</h6>
                <a href="{{ route('category.create') }}" class="btn btn-success">New Category</a>
            </div>
            <div class= "card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop-> iteration }}</td>
                            <td>{{ $category -> name }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" onclick="edit({{ $category->id }})">Edit</a>
                                <form class="d-inline" action="{{ route('category.destroy', $category) }}" method="POST" style="display:inline;">
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Form</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                        <label for="name">Name Category</label>
                        <input
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            type="text"
                            placeholder="Name Category"
                            value="{{ old('name') }}">
                        @error('name')
                            {{-- <div class="invalid-feedback"> --}}
                                <p class="alert alert-danger">Invalid Name Category<p>
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