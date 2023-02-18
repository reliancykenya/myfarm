@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Inventory</h1>

        <form action="{{ route('inventory.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Inventory</button>
        </form>
    </div>
@endsection
