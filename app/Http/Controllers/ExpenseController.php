<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();

        return view('expense.index', compact('expenses'));
    }

    public function create()
    {
        return view('expense.create');
    }

    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->name = $request->input('name');
        $expense->description = $request->input('description');
        $expense->amount = $request->input('amount');
        $expense->purchased_at = $request->input('purchased_at');
        $expense->save();

        return redirect()->route('expense.index');
    }

    public function edit($id)
    {
        $expense = Expense::find($id);

        return view('expense.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::find($id);
        $expense->name = $request->input('name');
        $expense->description = $request->input('description');
        $expense->amount = $request->input('amount');
        $expense->purchased_at = $request->input('purchased_at');
        $expense->save();

        return redirect()->route('expense.index');
    }

    public function destroy($id)
    {
        $expense = Expense::find($id);
        $expense->delete();

        return redirect()->route('expense.index');
    }
}
