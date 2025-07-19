@extends('layouts.app')

@section('content')
    <div class="container-xl d-flex justify-items-center align-items-center" style="min-height: 80vh">
        <div class="card shadow p-4" style="width: 400px">
            <div class="text-center h2">
                <i class="bi-apple"></i>
            </div>
            <h3 class="text-center mb-4">
                Login to Apple Store
            </h3>

            <form action="">
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email Addres <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your Email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password <span class="text-danger">*</span>
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>

                <div class="text-center mt-5">

                    <button type="submit" class="btn btn-dark w-100">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
