@extends('web.layouts.master')

@section('content')
<body>
<!-- Main Content -->
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Our Products</h1>
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Sort By
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                <li><a class="dropdown-item" href="#">Most Popular</a></li>
            </ul>
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Product Cards -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100">
                <img src="{{asset('web/assets/images/earbuds.jpg') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h5 class="card-title">Wireless Earbuds Pro</h5>
                    <p class="card-text text-muted small">Active noise cancellation, 30hr battery</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">$99.99</span>
                        <button class="btn btn-sm btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100">
                <img src="{{asset('web/assets/images/fintnesstracker.jpg') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h5 class="card-title">Fitness Tracker</h5>
                    <p class="card-text text-muted small">Heart rate monitor, waterproof</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">$59.99</span>
                        <button class="btn btn-sm btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100">
                <img src="{{asset('web/assets/images/charger.jpg') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h5 class="card-title">Portable Charger</h5>
                    <p class="card-text text-muted small">10000mAh, fast charging</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">$34.99</span>
                        <button class="btn btn-sm btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100">
                <img src="{{asset('web/assets/images/jbl.jpg') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h5 class="card-title">Bluetooth Speaker</h5>
                    <p class="card-text text-muted small">360° sound, 20hr playtime</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">$69.99</span>
                        <button class="btn btn-sm btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- More products would follow the same pattern -->

        <!-- Pagination -->
        <nav class="mt-5" aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</body>

@endsection


