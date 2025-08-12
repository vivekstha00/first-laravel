@extends('admin.layouts.master')

@section('admin-content')
<body>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-left: 16.666667%;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Users Table</h2>
            <a href="{{ route('admin.page.create') }}" class="btn btn-primary">
                <i class="bi bi-plus"></i> Create
            </a>
        </div>


        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->index +1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>
                            <a href="{{ route('admin.page.edit', $user->id) }}"><i class="bi bi-pencil"></i></a>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                @endforeach 
            </tbody>                
        </table>        
    </div>

</body>
</html>
@endsection