@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Livestock</h1>

        <a href="{{ route('livestock.create') }}" class="btn btn-primary">Add Animal</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                    <tr>
                        <td>{{ $animal->id }}</td>
                        <td>{{ $animal->name }}</td>
                        <td>{{ $animal->type }}</td>
                        <td>{{ $animal->quantity }}</td>
                        <td>
                            <a href="{{ route('livestock.show', $animal->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('livestock.edit', $animal->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('livestock.destroy', $animal->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this animal?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
