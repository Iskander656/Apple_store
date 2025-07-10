@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h1><i class="{{ $product->icon }}"></i> {{ $product->name }}</h1>
                <p class="text-muted"><s>${{ $product->old_price }}</s></p>
                <h3 class="text-danger">${{ $product->price }}</h3>

                <ul>
                    @foreach (explode(',', $product->description) as $line)
                        <li>{{ $line }}</li>
                    @endforeach
                </ul>

                <a href="#" class="btn btn-primary btn-lg mt-3">Buy Now</a>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary mt-3 ms-2">Back to Home</a>
            </div>
        </div>
    </div>
@endsection
