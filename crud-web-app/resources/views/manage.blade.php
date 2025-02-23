@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h2>Manage Inventory</h2>
    </div>

    <div class="d-flex justify-content-end mt-4">
        @if(!$showForm && !$updateItemId)
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
                            <a href="{{ route('manage', ['updateItemId' => $item->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('manage.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($showForm || $updateItemId)
        <div class="container py-4">
            <h3> {{ $updateItemId ? 'Edit Item' : 'Add New Item' }}</h3>
            <form action="{{ $updateItemId ? route('manage.update', $updateItemId) : route('manage.store') }}" method="post" class="form-group">
                @csrf
                @method($updateItemId ? 'PUT' : 'POST')
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $updateItem ? $updateItem->name : '' }}">
                        </div>
                        <div class="col-md-4">
                            <label for="product_code">Product Code</label>
                            <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $updateItem ? $updateItem->product_code : '' }}">
                        </div>
                        <div class="col-md-4">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $updateItem ? $updateItem->price : '' }}">
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $updateItem ? $updateItem->description : '' }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">{{ $updateItemId ? 'Update Item' : 'Add Item' }}</button>
                <a href="{{ route('manage') }}" class="btn btn-danger mt-3">Cancel</a>
            </form>
        </div>
    @endif
</div>
@endsection