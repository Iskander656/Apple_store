@extends('layouts.app')

@section('content')
    @include('layouts.hero')
    @include('layouts.intro')
    @include('layouts.mac')
    @include('layouts.ipad')
    @include('layouts.watch')

    <section class="py-5">
        <div class="container-xl">
            <div class="text-center mb-5">
                <i class="bi-apple display-4"></i>
                <h1 class="display-5" id="Featured">Featured Products</h1>
            </div>
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="card-img-top">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><i class="{{ $product->icon }}"></i> {{ $product->name }}</h5>
                                <ul>
                                    @foreach (explode(',', $product->description) as $line)
                                        <li>{{ $line }}</li>
                                    @endforeach
                                </ul>
                                <p class="text-danger fw-bold">${{ $product->price }}</p>
                                <a href="{{ route('order.form', $product->id) }}" class="btn btn-outline-primary"><i class="bi-cart text-success"></i>Order</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('layouts.stats')
    @include('layouts.testimonials')
    @include('layouts.footer')
@endsection
