<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KelasResource;
use App\Http\Resources\LokasiResource;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Kelas::with(['kelasjambelajars'])->get();
        return new KelasResource(true, 'Data kelas ditemukan', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:20'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        $model = Kelas::create($request->all());
        return new LokasiResource(true, 'Data kelas berhasil disimpan', $model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Kelas::with(['kelasjambelajars'])->find($id);
        return new KelasResource(true, 'Data kelas ditemukan', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:20'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        $model = Kelas::find($id);
        $model->update($request->all());
        return new LokasiResource(true, 'Data kelas berhasil diupdate', $model);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Kelas::find($id);
        $model->delete();
        return new LokasiResource(true, 'Data kelas berhasil dihapus', $model);    }
}
