@extends('layouts.app')

@section('content')
    <h1>Manage Banners</h1>
    <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">Add New Banner</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>
                        @if($banner->photo)
                            <img src="{{ asset('storage/' . $banner->photo) }}" alt="{{ $banner->title }}" width="100">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $banner->title }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>
                        <a href="{{ route('admin.banner.edit', $banner) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.banner.destroy', $banner) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
