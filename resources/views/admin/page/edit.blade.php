@extends('admin.layouts.master')

@section('admin-content')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-left: 16.666667%;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Edit User</h2>
    </div>

    <form action="{{ route('admin.page.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $user->age) }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update User</button>
        <a href="{{ route('admin.page.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection