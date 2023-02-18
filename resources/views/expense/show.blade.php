@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $expense->name }}</h1>

        <p><strong>Description:</strong> {{ $expense->description }}</p>
        <p><strong>Amount:</strong> {{ $expense->amount }}</p>

        <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-warning">Edit Expense</a>

        <form action="{{ route('expense.destroy', $expense->id) }}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete Expense</button>
        </form>
    </div>
@endsection
