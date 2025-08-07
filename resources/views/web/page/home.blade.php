@extends('web.layouts.master')

@section('content')
<body>
    <!-- Hero + Featured -->
    <div class="container my-5">
        <div class="text-center py-4">
            <h1 class="display-5 fw-bold">Welcome to ShopEasy</h1>
            <p class="lead">Great deals on quality products</p>
            <a href="products.html" class="btn btn-primary btn-lg">Start Shopping</a>
        </div>

        <h2 class="text-center my-4">Featured Products</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5>Wireless Earbuds</h5>
                        <p>Crystal clear sound, 20hr battery</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">$79.99</span>
                            <button class="btn btn-sm btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5>Smart Watch</h5>
                        <p>Fitness tracking & notifications</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">$129.99</span>
                            <button class="btn btn-sm btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5>Backpack</h5>
                        <p>Durable & waterproof</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">$49.99</span>
                            <button class="btn btn-sm btn-primary">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection


