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
                    <th>Created Date</th>
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
                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('admin.page.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.page.delete', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>                
        </table>        
    </div>

</body>
</html>
@endsection