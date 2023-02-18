<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();

        return view('inventory.index', compact('inventory'));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $inventory = new Inventory();
        $inventory->name = $request->input('name');
        $inventory->description = $request->input('description');
        $inventory->quantity = $request->input('quantity');
        $inventory->purchased_at = $request->input('purchased_at');
        $inventory->save();

        return redirect()->route('inventory.index');
    }

    public function edit($id)
    {
        $inventory = Inventory::find($id);

        return view('inventory.edit', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);
        $inventory->name = $request->input('name');
        $inventory->description = $request->input('description');
        $inventory->quantity = $request->input('quantity');
        $inventory->purchased_at = $request->input('purchased_at');
        $inventory->save();

        return redirect()->route('inventory.index');
    }

    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();

        return redirect()->route('inventory.index');
    }
}
