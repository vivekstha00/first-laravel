<!-- Sidebar -->
<div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <h4 class="px-3 mb-3">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('user*') ? 'active' : '' }}" href="{{ route('user') }}">
                    <i class="bi bi-people me-2"></i> Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('products*') ? 'active' : '' }}" href="#">
                    <i class="bi bi-box-seam me-2"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('orders*') ? 'active' : '' }}" href="#">
                    <i class="bi bi-cart me-2"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('settings*') ? 'active' : '' }}" href="#">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
            </li>
        </ul>
    </div>
</div>