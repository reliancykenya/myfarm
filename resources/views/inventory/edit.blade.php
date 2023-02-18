@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Inventory</h1>

        <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $inventory->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $inventory->description }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $inventory->quantity }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Inventory</button>
        </form>
    </div>
@endsection
