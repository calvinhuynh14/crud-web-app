@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h2>Manage Students</h2>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('manage', ['showForm' => true]) }}" class="btn btn-primary">Add New Item</a>
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
        <div class="mt-4">
            <h2>Add New Item</h2>
        </div>
    @endif
</div>
@endsection