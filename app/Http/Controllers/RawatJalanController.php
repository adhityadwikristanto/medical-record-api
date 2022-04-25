<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
    //
    public function index()
    {
        $rawatjalan = RawatJalan::all();
        return response()->json(['rawat_jalans'=>$rawatjalan], 200);
    }

    public function find($id)
    {
        $rawatjalan = RawatJalan::find($id);
        if($rawatjalan)
        {
            return response()->json(['rawat_jalans'=>$rawatjalan], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    public function insert(Request $request)
    {
        $request->validate([
            'tanggal'=>'required',
            'id_medrec'=>'required',
            'id_rs'=>'required',
            'cara_kunjungan'=>'required',
            'jenis_kunjungan'=>'required',
            'tindak_lanjut'=>'required',
            'status_kematian'=>'required',
            'diagnosis'=>'required',
            'kasus'=>'required',
            'penyebab'=>'required',
            'tindakan'=>'required',
            'terapi'=>'required',
            'pembayaran'=>'required',
        ]);

        $rawatjalan = new rawatjalan;
        $rawatjalan->tanggal = $request->tanggal;
        $rawatjalan->id_medrec = $request->id_medrec;
        $rawatjalan->id_rs = $request->id_rs;
        $rawatjalan->cara_kunjungan = $request->cara_kunjungan;
        $rawatjalan->jenis_kunjungan = $request->jenis_kunjungan;
        $rawatjalan->tindak_lanjut = $request->tindak_lanjut;
        $rawatjalan->status_kematian = $request->status_kematian;
        $rawatjalan->diagnosis = $request->diagnosis;
        $rawatjalan->kasus = $request->kasus;
        $rawatjalan->penyebab = $request->penyebab;
        $rawatjalan->tindakan = $request->tindakan;
        $rawatjalan->terapi = $request->terapi;
        $rawatjalan->pembayaran = $request->pembayaran;
        $rawatjalan->save();
        return response()->json(['message'=>'Register Rawat Jalan berhasil direkam.'], 200);
    }
}
