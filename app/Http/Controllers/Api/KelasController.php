<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KelasResource;
use App\Http\Resources\LokasiResource;
use App\Models\Kelas;
use Illuminate\Database\QueryException;
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
        return response()->json([
            'success' => true,
            'data' => $model
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:20',
            'lokasi_id'=> 'required|exists:lokasis,id',
            'tingkat_id'=> 'required|exists:tingkats,id'
        ]);
        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'data tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $model = Kelas::create($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil disimpan',
                'data' => $model
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Kelas::with(['kelasjambelajars'])->find($id);

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'data' => $model
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Kelas::with(['kelasjambelajars'])->find($id);

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:3|max:20',
            'lokasi_id'=> 'required|exists:lokasis,id',
            'tingkat_id'=> 'required|exists:tingkats,id'
        ]);
        if ($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'data tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $model->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil diperbarui',
                'data' => $model
            ], 200);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Kelas::with(['kelasjambelajars'])->find($id);

        if (!$model) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }
        
        $model->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus'
        ], 200);
    }
}
