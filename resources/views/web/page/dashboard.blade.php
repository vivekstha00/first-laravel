@extends('web.admin.master')

@section('admin-content')
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <h2 class="mb-4">Dashboard Overview</h2>
                
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <h3 class="card-text">1,254</h3>
                                <span class="text-success">12% increase</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Active Sessions</h5>
                                <h3 class="card-text">142</h3>
                                <span class="text-success">8% increase</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">New Signups</h5>
                                <h3 class="card-text">56</h3>
                                <span class="text-success">5% increase</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Pending Actions</h5>
                                <h3 class="card-text">23</h3>
                                <span class="text-danger">3 items need attention</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <a class="btn btn-outline-primary" href="{{ route('addUser') }}">
                                <i class="bi bi-person-plus me-2" ></i>Add User
                            </a>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-upload me-2"></i>Import Data
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-gear me-2"></i>System Settings
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="bi bi-bell me-2"></i>Send Notification
                            </button>
                            <button class="btn btn-outline-warning">
                                <i class="bi bi-trash me-2"></i>Clear Cache
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection