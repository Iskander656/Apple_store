@extends('layouts.app')

@section('content')
    <div class="container-xl d-flex justify-content-center align-items-center" style="min-height: 85vh;">
        <div class="card shadow-lg p-5 rounded-4" style="width: 500px;">

            @if (session('success'))
                <div class="alert alert-success text-center rounded-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="text-center mb-4">
                <i class="bi-apple display-5"></i>
                <h3 class="mt-2 fw-semibold">Order Product #{{ $productId }}</h3>
            </div>

            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $productId }}">

                <div class="mb-3">
                    <label for="name" class="form-label fw-medium">Your Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg rounded-3"
                        placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-medium">Phone Number <span
                            class="text-danger">*</span></label>
                    <input type="number" name="phone" id="phone" class="form-control form-control-lg rounded-3"
                        placeholder="Enter your phone number" required>
                </div>
                <div class="mb-4">
                    <label for="location" class="form-label fw-medium">Delivery Location <span
                            class="text-danger">*</span></label>
                    <select name="location_id" id="location" class="form-select form-select-lg rounded-3" required>
                        <option value="" disabled selected>Select location</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark btn-lg w-100 rounded-pill shadow-sm">
                        Submit Order
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.footer')
@endsection
