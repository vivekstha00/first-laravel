@extends('admin.layouts.master')

@section('admin-content')
<body>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-left: 16.666667%;">
        <div class="mb-4">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <!-- Total Users -->
            <div class="col-md-6 mb-3">
                <div class="card border-0 shadow-sm bg-primary text-white">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Total Users</h5>
                        <h3 class="text-white fw-bold mb-0">{{ $statistics['totalUsersCount'] }}</h3>
                    </div>
                </div>
            </div>
            
            <!-- Total Admin -->
            <div class="col-md-6 mb-3">
                <div class="card border-0 shadow-sm bg-success text-white">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Total Admin</h5>
                        <h3 class="text-white fw-bold mb-0">{{ $statistics['totalAdminsCount'] }}</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection
