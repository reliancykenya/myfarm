<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class CropController extends Controller
{
    public function index()
    {
        $crops = Crop::all();

        return view('crops.index', compact('crops'));
    }

    public function create()
    {
        return view('crops.create');
    }

    public function store(Request $request)
    {
        $crop = new Crop();
        $crop->name = $request->input('name');
        $crop->description = $request->input('description');
        $crop->planted_at = $request->input('planted_at');
        $crop->harvested_at = $request->input('harvested_at');
        $crop->save();

        return redirect()->route('crops.index');
    }

    public function edit($id)
    {
        $crop = Crop::find($id);

        return view('crops.edit', compact('crop'));
    }

    public function update(Request $request, $id)
    {
        $crop = Crop::find($id);
        $crop->name = $request->input('name');
        $crop->description = $request->input('description');
        $crop->planted_at = $request->input('planted_at');
        $crop->harvested_at = $request->input('harvested_at');
        $crop->save();

        return redirect()->route('crops.index');
    }

    public function destroy($id)
    {
        $crop = Crop::find($id);
        $crop->delete();

        return redirect()->route('crops.index');
    }
}
