<?php

namespace App\Http\Controllers;

use App\Models\RawatInap;
use Illuminate\Http\Request;

class RawatInapController extends Controller
{
    //
    public function index()
    {
        $rawatinap = RawatInap::all();
        return response()->json(['rawat_inaps'=>$rawatinap], 200);
    }

    public function find($id)
    {
        $rawatinap = RawatInap::find($id);
        if($rawatinap)
        {
            return response()->json(['rawat_inaps'=>$rawatinap], 200);
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
            'kelas_perawatan'=>'required|max:1',
            'cara_masuk_rs'=>'required|max:1',
            'pindah_internrs_dari'=>'required|max:1',
            'pindar_internrs_ke'=>'required|max:1',
            // 'waktu_keluar_rs_hidup'=>'required',
            // 'waktu_keluar_rs_mati'=>'required',
            'diagnosis_utama'=>'required|max:1',
            'komplikasi'=>'required|max:1',
            'sebab_luar'=>'required|max:1',
            'tindakan'=>'required|max:1',
            'tanggal_tindakan'=>'required',
            'dokter'=>'required|max:5',
            'cara_keluar_rs'=>'required|max:1',
            'kondisi_keluar_rs'=>'required|max:1',
            'pembayaran'=>'required|max:1',
        ]);

        $rawatinap = new rawatinap;
        $rawatinap->tanggal = $request->tanggal;
        $rawatinap->id_medrec = $request->id_medrec;
        $rawatinap->id_rs = $request->id_rs;
        $rawatinap->kelas_perawatan = $request->kelas_perawatan;
        $rawatinap->cara_masuk_rs = $request->cara_masuk_rs;
        $rawatinap->pindah_internrs_dari = $request->pindah_internrs_dari;
        $rawatinap->pindar_internrs_ke = $request->pindar_internrs_ke;
        $rawatinap->waktu_keluar_rs_hidup = $request->waktu_keluar_rs_hidup;
        $rawatinap->waktu_keluar_rs_mati = $request->waktu_keluar_rs_mati;
        $rawatinap->diagnosis_utama = $request->diagnosis_utama;
        $rawatinap->komplikasi = $request->komplikasi;
        $rawatinap->sebab_luar = $request->sebab_luar;
        $rawatinap->tindakan = $request->tindakan;
        $rawatinap->tanggal_tindakan = $request->tanggal_tindakan;
        $rawatinap->dokter = $request->dokter;
        $rawatinap->cara_keluar_rs = $request->cara_keluar_rs;
        $rawatinap->kondisi_keluar_rs = $request->kondisi_keluar_rs;
        $rawatinap->pembayaran = $request->pembayaran;

        $rawatinap->save();
        return response()->json(['message'=>'Register Rawat Inap berhasil direkam.'], 200);
    }
}
