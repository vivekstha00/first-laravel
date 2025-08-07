@extends('web.layouts.master')

@section('content')
<body>
    <!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="mb-4">Contact Us</h1>
            <p>Have questions or feedback? We'd love to hear from you!</p>
            
            <div class="mb-4">
                <h4>Store Information</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><strong>Address:</strong> 123 Shop Street, Retail City, RC 12345</li>
                    <li class="mb-2"><strong>Phone:</strong> (123) 456-7890</li>
                    <li class="mb-2"><strong>Email:</strong> info@shopeasy.com</li>
                    <li class="mb-2"><strong>Hours:</strong> Mon-Fri: 9AM-6PM</li>
                </ul>
            </div>
            
            <h4 class="mb-3">Follow Us</h4>
            <div class="d-flex gap-3 mb-4">
                <a href="#" class="btn btn-outline-primary">Facebook</a>
                <a href="#" class="btn btn-outline-primary">Twitter</a>
                <a href="#" class="btn btn-outline-primary">Instagram</a>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Send Us a Message</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection