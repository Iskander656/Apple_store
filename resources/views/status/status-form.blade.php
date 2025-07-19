@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Check Your Order Status</h2>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('status.status.check') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="customer_name" class="form-label">
                    Your Full Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" required>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Check Status</button>
            </div>
        </form>
    </div>
@endsection
