@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h2>Manage Students</h2>
    </div>

    <div class="d-flex justify-content-end mt-4">
        @if(!$showForm)
            <a href="{{ route('manage', ['showForm' => true]) }}" class="btn btn-primary">Add New Item</a>
        @endif
    </div>
    
    <div class="mt-2">
        <table class="table table-sm table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th class="fs-5" style="width: 15%">Name</th>
                    <th class="fs-5" style="width: 40%">Description</th>
                    <th class="fs-5" style="width: 15%">Product Code</th>
                    <th class="fs-5" style="width: 15%">Price</th>
                    <th class="fs-5" style="width: 15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->product_code }}</td>
                        <td>{{ $item->price }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm">Edit</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($showForm)
        <div class="container py-4">
            <h3>Add New Item</h3>
            <form action="{{ route('manage.store') }}" method="post" class="form-group">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-md-4">
                            <label for="product_code">Product Code</label>
                            <input type="text" class="form-control" id="product_code" name="product_code">
                        </div>
                        <div class="col-md-4">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Item</button>
            </form>
        </div>
    @endif
</div>
@endsection