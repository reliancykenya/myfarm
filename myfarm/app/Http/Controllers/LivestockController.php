<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivestockController extends Controller
{
    public function index()
    {
        $livestock = Livestock::all();

        return view('livestock.index', compact('livestock'));
    }

    public function create()
    {
        return view('livestock.create');
    }

    public function store(Request $request)
    {
        $livestock = new Livestock();
        $livestock->name = $request->input('name');
        $livestock->description = $request->input('description');
        $livestock->quantity = $request->input('quantity');
        $livestock->unit = $request->input('unit');
        $livestock->save();

        return redirect()->route('livestock.index');
    }

    public function edit($id)
    {
        $livestock = Livestock::find($id);

        return view('livestock.edit', compact('livestock'));
    }

    public function update(Request $request, $id)
    {
        $livestock = Livestock::find($id);
        $livestock->name = $request->input('name');
        $livestock->description = $request->input('description');
        $livestock->quantity = $request->input('quantity');
        $livestock->unit = $request->input('unit');
        $livestock->save();

        return redirect()->route('livestock.index');
    }

    public function destroy($id)
    {
        $livestock = Livestock::find($id);
        $livestock->delete();

        return redirect()->route('livestock.index');
    }
}

