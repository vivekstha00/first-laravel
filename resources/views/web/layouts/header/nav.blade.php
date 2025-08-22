 <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Lasa Wheels</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car') }}">Our Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                @endauth
            </ul>
            <div>
                @guest
                    <a href="{{ route('login') }}">
                        <button class="btn btn-outline-light me-2" style="min-width: 84px!important;" type="button">
                            Login
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn btn-outline-light me-2" style="min-width: 84px!important;" type="button">
                            Sign Up
                        </button>
                    </a>
                @else
                    <span class="text-white me-3">Hi, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-outline-light me-2" style="min-width: 84px!important;" type="submit">
                            Logout
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>