<?php

namespace App\Http\Controllers;

use App\Models\RiwayatRekamMedis;
use App\Models\Medrec;
// use App\Models\RawatJalan;
use App\Models\Medcheckup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RiwayatRekamMedisController extends Controller
{
    //
    public function index()
    {
        $riwayat_rekam_medis = RiwayatRekamMedis::all();
        return response()->json(['riwayat_rekam_medis'=>$riwayat_rekam_medis], 200);
    }

    public function find($id)
    {
        $riwayat_rekam_medis = RiwayatRekamMedis::find($id);
        // $riwayat_rekam_medis = RiwayatRekamMedis::where('id_medrec',$id)->latest('updated_at')->first();
        if($riwayat_rekam_medis)
        {
            return response()->json(['riwayat_rekam_medis'=>$riwayat_rekam_medis], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    // public function insert(Request $request)
    // {
    //     $request->validate([
    //         'hash'=>'required',
    //         'id_pasien'=>'required',
    //         'nama_file'=>'required',
    //     ]);
        
    //     $riwayat_rekam_medis = new RiwayatRekamMedis;
    //     $riwayat_rekam_medis->hash = $request->hash;
    //     $riwayat_rekam_medis->id_pasien = $request->id_pasien;
    //     $riwayat_rekam_medis->nama_file = $request->nama_file;
    //     $riwayat_rekam_medis->save();
    //     return response()->json(['message'=>'Riwayat rekam medis berhasil direkam.'], 200);
    // }

    public function riwayat($id)
    {
        $riwayat = [];
        $medrec = Medrec::find($id);
        array_push($riwayat, $medrec);

        // $rawatjalan = RawatJalan::where('id_rekammedis',$id)->get();
        // array_push($riwayat, $rawatjalan);
        // $medcheckup = Medcheckup::where('id_medrec',$id)->get();
        $medcheckup = Medcheckup::where('id_medrec',$id)->latest('updated_at')->first();
        array_push($riwayat, $medcheckup);
        $id_rs = $medcheckup->value('id_rs');

        if($riwayat)
        {
            $t = strtotime("now");
            Storage::disk('public')->put($id.$t.'.json', json_encode($riwayat));

            $riwayat_rekam_medis = new RiwayatRekamMedis;
            $riwayat_rekam_medis->hash = "belum ada";
            $riwayat_rekam_medis->id_medrec = $id;
            $riwayat_rekam_medis->id_rs = $id_rs;
            $riwayat_rekam_medis->nama_file = $id.$t.'.json';
            $riwayat_rekam_medis->save();
            return response()->json(['riwayat'=>$riwayat], 200);
        }
        else{
            return response()->json(['message'=>'Data tidak ditemukan.'], 404);
        }
    }
}
