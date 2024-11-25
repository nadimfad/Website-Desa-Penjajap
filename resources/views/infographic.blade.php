@extends('layouts.app')

@section('content')
    <h1>Infographic</h1>

    <p><strong>Population:</strong> {{ $infographic->population ?? 'N/A' }}</p>
    <p><strong>Households:</strong> {{ $infographic->households ?? 'N/A' }}</p>
@endsection
