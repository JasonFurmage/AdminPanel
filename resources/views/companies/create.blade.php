@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Company</h1>

    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name *</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" name="website" class="form-control" value="{{ old('website') }}">
            @error('website') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo (min 100x100)</label>
            <input type="file" name="logo" class="form-control">
            @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Company</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
