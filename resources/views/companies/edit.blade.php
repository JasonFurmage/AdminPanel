@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Company</h1>

    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name *</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $company->name) }}" required>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $company->email) }}">
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" name="website" class="form-control" value="{{ old('website', $company->website) }}">
            @error('website') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo (min 100x100)</label>
            <input type="file" name="logo" class="form-control">
            @if ($company->logo)
                <p class="mt-2">Current: <img src="{{ asset('storage/' . $company->logo) }}" width="100"></p>
            @endif
            @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Company</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
