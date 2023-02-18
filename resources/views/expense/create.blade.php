@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Expense</h1>

        <form method="post" action="{{ route('expense.store') }}">
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
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Expense</button>
        </form>
    </div>
@endsection
