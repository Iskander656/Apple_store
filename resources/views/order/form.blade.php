@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Order Product #{{ $productId }}</h2>

        <form action="#" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">
                    Your Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label" required>
                    Your Phone Number <span class="text-danger">*</span>
                </label>
                <input type="number" name="phone" id="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="Location" id="location" class="form-label">
                    Delivery Location <span class="text-danger">*</span>
                </label>
                <select name="location_id" id="location" class="form-select" required>

                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-success">Submit Order</button>
            </div>
        </form>
    </div>
@endsection
