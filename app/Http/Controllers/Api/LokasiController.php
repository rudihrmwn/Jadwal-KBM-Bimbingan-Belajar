<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LokasiResource;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Lokasi::all();
        return new LokasiResource(true, 'Data lokasi ditemukan', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:20',
            'short_name'=> 'required|string|min:3|max:5',
            'rooms_count'=> 'required|integer|min:1|max:50'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(),442);
        }
        $model = Lokasi::create($request->all());
        return new LokasiResource(true,'Data lokasi berhasil disimpan', $model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Lokasi::find($id);
        return new LokasiResource(true, 'Data lokasi ditemukan',$model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:20',
            'short_name'=> 'required|string|min:3|max:5',
            'rooms_count'=> 'required|integer|min:1|max:50'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(),442);
        }
        $model = Lokasi::find($id);
        $model->update([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'rooms_count' => $request->rooms_count
        ]);
        return new LokasiResource(true,'Data berhasil dirubah', $model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
