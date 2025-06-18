<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JamResource;
use App\Models\Jam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Jam::latest()->get();
        return new JamResource(true, 'List Data Jam', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string'
            ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 442);
        }
        $model = Jam::create($request->all());
        return new JamResource(true, 'Data jam berhasil ditambahkan',$model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Jam::find($id);
        return new JamResource(true, 'Detail Data Jam', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 442);
        }

        $model = Jam::find($id);
        $model->update([
            'name' => $request->name
        ]);
        return new JamResource(true,'Data jam berhasil diubah', $model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Jam::find($id);
        $model->delete();
        return new JamResource(true,'Data jam berhasil dihapus', $model);
    }
}
