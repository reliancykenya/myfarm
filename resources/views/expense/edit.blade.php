@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Expense</h1>

        <form method="post" action="{{ route('expense.update', $expense->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $expense->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $expense->description }}" required>
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $expense->amount }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Expense</button>
        </form>
    </div>
@endsection
