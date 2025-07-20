@extends('layouts.app')

@section('content')
    <div class="container py-5 d-flex justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 mt-5">
            <div class="card shadow-lg border-0 rounded-4 mt-5">
                <div class="card-body p-5">
                    <h2 class="mb-4 text-center display-6 fw-semibold">Order Details</h2>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Customer:</strong> {{ $order->customer_name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Product:</strong> {{ $order->product->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Location:</strong> {{ $order->location->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>Status:</strong>
                            <span
                                class="badge bg-{{ $order->status == 'pending' ? 'warning' : ($order->status == 'completed' ? 'success' : 'secondary') }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
