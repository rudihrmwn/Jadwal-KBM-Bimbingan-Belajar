<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PengajarResource;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Pengajar::with('mapels')->get();
        return new PengajarResource(true,'Data pengajar ditemukan', $model);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:50',
            'short_name'=> 'required|string|min:2|max:5',
            'phone_number'=> 'required|string|min:8|max:15'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $model = Pengajar::create($request->all());
        return new PengajarResource(true,'Data pengajar berhasil disimpan', $model);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Pengajar::with('mapels')->find($id);
        return new PengajarResource(true,'Data pengajar ditemukan', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required|string|min:5|max:50',
            'short_name'=> 'required|string|min:2|max:5',
            'phone_number'=> 'required|string|min:8|max:15'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        $model = Pengajar::find($id);
        $model->update($request->all());
        return new PengajarResource(true,'Data pengajar berhasil diubah', $model);    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Pengajar::find($id);
        $model->delete();
        return new PengajarResource(true,'Data pengajar berhasil dihapus', $model);
    }
}
