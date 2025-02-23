@extends('layouts.app')

@section('content')
<div class="mt-4">
    <div class="row">

        <div class="col-md-2">
            <div class="d-flex flex-column h-100">
                <div class="card flex-fill mt-3">
                    <div class="card-header">
                        <h4>Contact IT Support</h4>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center">
                        <p>If you have any questions or need assistance, please contact us at:</p>
                        <p><strong>Email:</strong> support@example.com</p>
                        <img src="{{ asset('images/it.png') }}" alt="IT Support" class="img-fluid" style="width: 100px; height: 100px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10 px-5">
            <h2 class="text-center">About Our Inventory Management Application</h2>
            <div class="w-75 mx-auto">
                <p>This application is designed to help users manage their inventory records efficiently. It allows for easy addition, updating, and deletion of items, ensuring that your inventory is always up-to-date.</p>
            </div>
        </div>
        
    </div>
</div>
@endsection