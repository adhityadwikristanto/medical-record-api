<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index()
    {
        $dokter = Dokter::all();
        return response()->json(['dokters'=>$dokter], 200);
    }

    public function find($id)
    {
        $dokter = Dokter::find($id);
        if($dokter)
        {
            return response()->json(['dokters'=>$dokter], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'spesialisasi'=>'required',
            'id_rs'=>'required',
        ]);

        $dokter = new Dokter;
        $dokter->nama = $request->nama;
        $dokter->tempat_lahir = $request->tempat_lahir;
        $dokter->tanggal_lahir = $request->tanggal_lahir;
        $dokter->spesialisasi = $request->spesialisasi;
        $dokter->id_rs = $request->id_rs;
        $dokter->save();
        return response()->json(['message'=>'Dokter berhasil direkam.'], 200);
    }
}
