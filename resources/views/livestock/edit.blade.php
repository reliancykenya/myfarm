@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Livestock</h1>

        <form action="{{ route('livestock.update', $livestock->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $livestock->name }}" required>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $livestock->type }}" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $livestock->quantity }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Livestock</button>
        </form>
    </div>
@endsection
