@extends('layouts.app')

@section('content')

    @include('layouts.hero')
    @include('layouts.intro')

    <section class="py-5">
        <div class="container-xl">
            <div class="text-center mb-5">
                <i class="bi-apple display-4"></i>
                <h1 class="display-5">Featured Products</h1>
            </div>
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card product-card h-100">
                            <img src="{{ asset('img/' . $product->image) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><i class="{{ $product->icon }}"></i> {{ $product->name }}</h5>
                                <ul>
                                    @foreach (explode(',', $product->description) as $line)
                                        <li>{{ $line }}</li>
                                    @endforeach
                                </ul>
                                <p class="text-muted mb-1"><s>${{ $product->old_price }}</s></p>
                                <p class="text-danger fw-bold">${{ $product->price }}</p>
                                <a href="{{ route('product.show', $product->id) }}"
                                    class="btn btn-outline-primary mt-auto">Order Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.stats')
    @include('layouts.testimonials')

@endsection
