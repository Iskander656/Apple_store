@extends('layouts.app')

@section('content')
    <div class="container-xl d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-5 rounded-4" style="width: 400px;">
            <div class="text-center mb-4">
                <i class="bi bi-apple display-4 text-dark"></i>
                <h3 class="mt-2 fw-semibold">Login to Apple Store</h3>
            </div>

            <form action="">
                <div class="mb-3">
                    <label for="email" class="form-label fw-medium">Email Address <span
                            class="text-danger">*</span></label>
                    <input type="email" class="form-control form-control-lg rounded-3" id="email"
                        placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-medium">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control form-control-lg rounded-3" id="password"
                        placeholder="Enter your password" required>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-dark btn-lg w-100 rounded-pill shadow-sm">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
