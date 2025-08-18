@extends('web.layouts.master')

@section('content')
<body>
    <!-- Main Content -->
<div class="container my-5">
    <h1 class="mb-4">Shop by Category</h1>
    
    <div class="row g-4">
        <!-- Category 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Electronics" class="card-img-top" alt="Electronics">
                <div class="card-body text-center">
                    <h3>Electronics</h3>
                    <p class="text-muted">Smartphones, Laptops, Accessories</p>
                    <a href="products.html?category=electronics" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        
        <!-- Category 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Fashion" class="card-img-top" alt="Fashion">
                <div class="card-body text-center">
                    <h3>Fashion</h3>
                    <p class="text-muted">Clothing, Shoes, Accessories</p>
                    <a href="products.html?category=fashion" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        
        <!-- Category 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Home+Garden" class="card-img-top" alt="Home & Garden">
                <div class="card-body text-center">
                    <h3>Home & Garden</h3>
                    <p class="text-muted">Furniture, Decor, Kitchenware</p>
                    <a href="products.html?category=home-garden" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        
        <!-- Category 4 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Beauty" class="card-img-top" alt="Beauty">
                <div class="card-body text-center">
                    <h3>Beauty</h3>
                    <p class="text-muted">Skincare, Makeup, Fragrances</p>
                    <a href="products.html?category=beauty" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        
        <!-- Category 5 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Sports" class="card-img-top" alt="Sports">
                <div class="card-body text-center">
                    <h3>Sports</h3>
                    <p class="text-muted">Equipment, Apparel, Accessories</p>
                    <a href="products.html?category=sports" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        
        <!-- Category 6 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/600x400?text=Toys" class="card-img-top" alt="Toys">
                <div class="card-body text-center">
                    <h3>Toys & Games</h3>
                    <p class="text-muted">Kids Toys, Board Games</p>
                    <a href="products.html?category=toys" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Featured Brands Section -->
    <div class="mt-5">
        <h2 class="mb-4">Popular Brands</h2>
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="p-3 border text-center">
                    <img src="https://via.placeholder.com/150x80?text=Brand+1" alt="Brand 1" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border text-center">
                    <img src="https://via.placeholder.com/150x80?text=Brand+2" alt="Brand 2" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border text-center">
                    <img src="https://via.placeholder.com/150x80?text=Brand+3" alt="Brand 3" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border text-center">
                    <img src="https://via.placeholder.com/150x80?text=Brand+4" alt="Brand 4" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection