@extends('web.layouts.master')

@section('content')
<body>
    <!-- Hero + Featured -->
<div class="container mt-5">
    <div class="row">
        <!-- Booking Form (Left Side) -->
        <div class="col-md-6">
            <h1>Welcome to Vehicle Rental</h1>
            <p>Your one-stop solution for renting vehicles</p>
            <div>
                <div class="mb-3">
                    <label for="pickupLocation" class="form-label">
                        <i class="fas fa-map-marker-alt"></i> Pickup Location
                    </label>
                    <input type="text" class="form-control" id="pickupLocation" placeholder="Enter pickup location">
                </div>
                <div class="mb-3">
                    <label for="dropoffLocation" class="form-label">
                        <i class="fas fa-map-marker-alt"></i> Drop-off Location
                    </label>
                    <input type="text" class="form-control" id="dropoffLocation" placeholder="Enter drop-off location">
                </div>
                <div class="mb-3">
                    <label for="travelLocation" class="form-label">
                        <i class="fas fa-map-signs"></i> Travel Location
                    </label>
                    <input type="text" class="form-control" id="travelLocation" placeholder="Enter travel location">
                </div>
                <div class="mb-3">
                    <label for="pickupDate" class="form-label">
                        <i class="fas fa-calendar-alt"></i> Pickup Date
                    </label>
                    <input type="date" class="form-control" id="pickupDate" placeholder="Select pickup date">
                </div>
                <div class="mb-3">
                    <label for="returnDate" class="form-label">
                        <i class="fas fa-calendar-check"></i> Return Date
                    </label>
                    <input type="date" class="form-control" id="returnDate" placeholder="Select return date">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-search"></i> Book Vehicles
                    </button>
                </div>
            </div>
        </div>
        <!-- Other Content (Right Side) -->
        <div class="col-md-6">
            <!-- Add your other content here, e.g., images, featured vehicles, etc. -->
            <div class="p-4 bg-light rounded">
                <h2>Featured Vehicles</h2>
                <p>Showcase your best vehicles or promotional content here.</p>
                <!-- Example image -->
                <img src="{{asset('web/assets/images/gt3.jpeg') }}" class="img-fluid rounded" alt="Featured Vehicle">
            </div>
        </div>
    </div>
</div>
</body>
@endsection


