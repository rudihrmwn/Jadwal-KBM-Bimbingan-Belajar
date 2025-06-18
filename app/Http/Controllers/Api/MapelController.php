<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MapelResource;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Mapel::all();
        return new MapelResource(true, 'Data mapel ditemukan', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:20',
            'short_name'=> 'required|string|min:3|max:5',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $model = Mapel::create($request->all());
        return new MapelResource(true,'Data mapel berhasil disimpan', $model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Mapel::find($id);
        return new MapelResource(true, 'Data mapel ditemukan', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:20',
            'short_name'=> 'required|string|min:3|max:5',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $model = Mapel::find($id);
        $model->update($request->all());
        return new MapelResource(true,'Data mapel berhasil dirubah', $model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
