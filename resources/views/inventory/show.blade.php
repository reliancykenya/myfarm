@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $inventory->name }}</h1>

        <p><strong>Description:</strong> {{ $inventory->description }}</p>
        <p><strong>Quantity:</strong> {{ $inventory->quantity }}</p>

        <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-warning">Edit Inventory</a>

        <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this inventory?')">Delete Inventory</button>
        </form>
    </div>
@endsection
