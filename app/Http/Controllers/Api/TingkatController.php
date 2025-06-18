<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TingkatResource;
use App\Models\Tingkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Tingkat::all();
        return new TingkatResource(true, 'Data tingkat ditemukan', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:15'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $model = Tingkat::create($request->all());
        return new TingkatResource(true,'Data tingkat berhasil disimpan', $model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Tingkat::find($id);
        return new TingkatResource(true, 'Data tingkat ditemukan', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:15'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $model = Tingkat::find($id );
        $model->update($request->all());
        return new TingkatResource(true,'Data tingkat berhasil diupdate', $model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Tingkat::find($id);
        $model->delete();
        return new TingkatResource(true,'Data tingkat berhasil dihapus', $model);
    }
}
