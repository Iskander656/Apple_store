@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Order Details</h2>

        <ul class="list-group">
            <li class="list-group-item"><strong>Customer:</strong> {{ $order->customer_name }}</li>
            <li class="list-group-item"><strong>Product:</strong> {{ $order->product->name }}</li>
            <li class="list-group-item"><strong>Location:</strong> {{ $order->location->name }}</li>
            <li class="list-group-item"><strong>Status:</strong> {{ $order->status }}</li>
        </ul>
    </div>
@endsection
