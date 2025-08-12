<!-- Sidebar
<div class="col-md-3 col-lg-2 d-md-block bg-dark text-white vh-100 position-fixed p-3">
    <h5 class="text-uppercase border-bottom pb-2">Admin Menu</h5>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.page.dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.page.index') }}">Users</a></li>
    </ul>
</div> -->
<!-- Sidebar -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 250px; height: 100vh;">
    <h5 class="text-uppercase border-bottom pb-2">Admin Menu</h5>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.page.dashboard') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.page.dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.page.index') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.page.index') ? 'active' : '' }}">
                Users
            </a>
        </li>
    </ul>
    <div class="mt-auto pt-3 border-top">
        <small class="text-muted">Hi, {{ Auth::user()->name ?? 'Guest' }}</small>
    </div>
</div>