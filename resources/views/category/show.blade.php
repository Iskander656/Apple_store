@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="text-center display-6 pb-2">
                <i class="bi-apple"></i>
            </div>
            <h2 class="mb-4 text-center">{{ $category->name }}</h2>

            @if ($products->isEmpty())
                <p class="text-center">Empty.</p>
            @else
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

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
                                    <div class="mt-auto row">
                                        <p class="text-danger fw-bold fs-5">${{ $product->price }}</p>
                                        <a href="{{ route('order.form', $product->id) }}"
                                            class="btn btn-outline-primary btn-lg rounded-5"><i
                                                class="bi-cart text-success"></i>Order</a>
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
