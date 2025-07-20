@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">{{ $category->name }}</h2>

            @if ($products->isEmpty())
                <p class="text-center">Empty.</p>
            @else
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <ul class="mb-3">
                                        @foreach (explode(',', $product->description) as $line)
                                            <li>{{ $line }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="mt-auto">
                                        <p class="text-danger fw-bold fs-5">${{ $product->price }}</p>
                                        <a href="{{ route('order.form', $product->id) }}" class="btn btn-outline-primary">Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
    @include('layouts.footer')
@endsection
