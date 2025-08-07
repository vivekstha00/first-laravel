@extends('web.layouts.master')

@section('content')
<body>
    <!-- Main Content -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-4">About ShopEasy</h1>
            <p class="lead">Your trusted online shopping destination since 2015.</p>
            <p>We started with a simple mission: to make online shopping easy, affordable, and enjoyable for everyone. What began as a small team of shopping enthusiasts has grown into one of the most popular e-commerce platforms.</p>
            <p>Today, we serve millions of customers worldwide with a carefully curated selection of products across all categories.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/600x400?text=Our+Team" alt="Our Team" class="img-fluid rounded">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <div class="text-center p-4 border rounded">
                <h3>Our Mission</h3>
                <p>To simplify online shopping while offering the best products at competitive prices.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-4 border rounded">
                <h3>Our Values</h3>
                <p>Customer satisfaction, quality products, and seamless shopping experience.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="text-center p-4 border rounded">
                <h3>Our Promise</h3>
                <p>Fast delivery, easy returns, and 24/7 customer support.</p>
            </div>
        </div>
    </div>
</div>
</body>

@endsection