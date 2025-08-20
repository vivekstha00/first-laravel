@extends('admin.layouts.master')

@section('admin-content')
<body>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-left: 16.666667%;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Dashboard</h1>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text fs-3 fw-bold">{{ $statistics['totalUsersCount'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-secondary mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Admin</h5>
                            <p class="card-text fs-3 fw-bold">{{ $statistics['totalAdminsCount'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

</body>
   
@endsection