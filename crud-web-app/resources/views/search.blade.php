@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h2>Search Students</h2>
    </div>

    <div class="d-flex justify-content-center">
        <form action="{{ route('search.results') }}" method="GET" class="form-group w-75">
            <div class="row">
                <div class="col-md-6">
                    <label for="search">Search</label>
                    <input type="text" class="form-control" id="search" name="search">
                </div>
                <div class="col-md-2">
                    <label for="low">Low</label>
                    <input type="number" class="form-control" id="low" name="low">
                </div>
                <div class="col-md-2">
                    <label for="high">High</label>
                    <input type="number" class="form-control" id="high" name="high">
                </div>
                <button type="submit" class="btn btn-primary col-md-2 mt-3">Search</button>
            </div>
        </form>
    </div>

    @if(isset($items))
        <div class="mt-4">
            <h3>Search Results</h3>
            <table class="table table-sm table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th class="fs-5" style="width: 15%">Name</th>
                    <th class="fs-5" style="width: 40%">Description</th>
                    <th class="fs-5" style="width: 15%">Product Code</th>
                    <th class="fs-5" style="width: 15%">Price</th>
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
        </div>
    @endif
</div>
@endsection