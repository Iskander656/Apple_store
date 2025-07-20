@extends('layouts.app')

@section('content')
    <div class="container py-5 d-flex justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 mt-5">
            <div class="card shadow-lg border-0 rounded-4 mt-5">
                <div class="card-body p-5">
                    <h2 class="mb-4 text-center display-6 fw-semibold">Check Your Order Status</h2>

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('status.status.check') }}" method="POST">
                        @csrf
                        <div class="mb-3 pt-2">
                            <label for="customer_name" class="form-label fw-semibold">
                                Your Full Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control rounded-3"
                                placeholder="Enter Your Name" required>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-outline-primary rounded-pill px-4 py-2">
                                Check Status
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
