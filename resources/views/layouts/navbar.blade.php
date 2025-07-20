<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container-xl">
        <a class="navbar-brand fw-bold text-dark" href="{{ route('home') }}">
            <i class="bi bi-apple"></i> Apple Store
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link "href="{{ route('status.status.form') }}">Order Status</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Categories
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn ms-lg-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link position-relative" href="{{ route('category.show', ['id' => 1]) }}">
                        <i class="bi bi-cart-fill fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </a>
                </li>

                <li class="nav-item d-flex align-items-center ms-2">
                    <button class="btn btn-outline-secondary" id="toggleDark">
                        <i class="bi bi-moon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
