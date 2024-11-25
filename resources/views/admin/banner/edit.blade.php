@extends('layouts.app')

@section('content')
    <h1>Edit Banner</h1>
    <form action="{{ route('admin.banner.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
            @if($banner->photo)
                <img src="{{ asset('storage/' . $banner->photo) }}" alt="{{ $banner->title }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required value="{{ $banner->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $banner->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
