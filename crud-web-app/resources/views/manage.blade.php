@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h2>Manage Students</h2>
    </div>
    
    <div class="mt-4">
        <table class="table table-sm table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th class="fs-5">Name</th>
                    <th class="fs-5">Description</th>
                    <th class="fs-5">Product Code</th>
                    <th class="fs-5">Price</th>
                    <th class="fs-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->product_code }}</td>
                        <td>{{ $item->price }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection