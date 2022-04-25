<?php

namespace App\Http\Controllers;

use App\Models\Medrec;
// use App\Models\RawatJalan;
use Illuminate\Http\Request;

class MedrecController extends Controller
{
    //
    public function index()
    {
        $medrec = Medrec::all();
        return response()->json(['medrecs'=>$medrec], 200);
    }

    public function find($id)
    {
        $medrec = Medrec::find($id);
        if($medrec)
        {
            return response()->json(['medrecs'=>$medrec], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:191',
            'tempat_lahir'=>'required|max:191',
            'tanggal_lahir'=>'required',
            'jk'=>'required|max:1',
            'alamat'=>'required|max:191',
            'agama'=>'required|max:1',
            'status_nikah'=>'required|max:1',
            'pendidikan'=>'required|max:1',
            'pekerjaan'=>'required|max:1',
            'kewarganegaraan'=>'required|max:1',
            'pembayaran'=>'required|max:1',
            'penanggungjawab'=>'required|max:191',
            'no_telp'=>'required|max:20',
            'klinik_tujuan'=>'required|max:2',
            'tanggal_rekam'=>'required',
        ]);

        $medrec = new Medrec;
        $medrec->nama = $request->nama;
        $medrec->tempat_lahir = $request->tempat_lahir;
        $medrec->tanggal_lahir = $request->tanggal_lahir;
        $medrec->jk = $request->jk;
        $medrec->alamat = $request->alamat;
        $medrec->agama = $request->agama;
        $medrec->status_nikah = $request->status_nikah;
        $medrec->pendidikan = $request->pendidikan;
        $medrec->pekerjaan = $request->pekerjaan;
        $medrec->kewarganegaraan = $request->kewarganegaraan;
        $medrec->pembayaran = $request->pembayaran;
        $medrec->penanggungjawab = $request->penanggungjawab;
        $medrec->no_telp = $request->no_telp;
        $medrec->klinik_tujuan = $request->klinik_tujuan;
        $medrec->tanggal_rekam = $request->tanggal_rekam;
        $medrec->save();
        return response()->json(['message'=>'Medical record added successfully.'], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|max:191',
            'tempat_lahir'=>'required|max:191',
            'tanggal_lahir'=>'required',
            'jk'=>'required|max:1',
            'alamat'=>'required|max:191',
            'agama'=>'required|max:1',
            'status_nikah'=>'required|max:1',
            'pendidikan'=>'required|max:1',
            'pekerjaan'=>'required|max:1',
            'kewarganegaraan'=>'required|max:1',
            'pembayaran'=>'required|max:1',
            'penanggungjawab'=>'required|max:191',
            'no_telp'=>'required|max:20',
            'klinik_tujuan'=>'required|max:2',
            'tanggal_rekam'=>'required',
        ]);

        $medrec = Medrec::find($id);
        if($medrec)
        {
            $medrec->nama = $request->nama;
            $medrec->tempat_lahir = $request->tempat_lahir;
            $medrec->tanggal_lahir = $request->tanggal_lahir;
            $medrec->jk = $request->jk;
            $medrec->alamat = $request->alamat;
            $medrec->agama = $request->agama;
            $medrec->status_nikah = $request->status_nikah;
            $medrec->pendidikan = $request->pendidikan;
            $medrec->pekerjaan = $request->pekerjaan;
            $medrec->kewarganegaraan = $request->kewarganegaraan;
            $medrec->pembayaran = $request->pembayaran;
            $medrec->penanggungjawab = $request->penanggungjawab;
            $medrec->no_telp = $request->no_telp;
            $medrec->klinik_tujuan = $request->klinik_tujuan;
            $medrec->tanggal_rekam = $request->tanggal_rekam;
            $medrec->update();
            return response()->json(['message'=>'Medical record updated successfully.'], 200);
        }
        else
        {
            return response()->json(['message'=>'Record not found.'], 404);
        }
    }

    public function delete($id)
    {
        $medrec = Medrec::find($id);
        if($medrec)
        {
            $medrec->delete();
            return response()->json(['message'=>'Medical record deleted successfully.'], 200);
        }
        else
        {
            return response()->json(['message'=>'Record not found.'], 404);
        }
    }

    // public function riwayat($id)
    // {
    //     // $medrec = Medrec::find($id);
    //     // $medrec = RawatJalan::with(['rawat_jalans'])->where('id_rekammedis',$id)->get();
    //     // $riwayat = Medrec::find($id);
    //     $riwayat = [];
    //     $medrec = Medrec::find($id);
    //     array_push($riwayat, $medrec);

    //     $rawatjalan = RawatJalan::where('id_rekammedis',$id)->get();
    //     array_push($riwayat, $rawatjalan);

        
    //     if($riwayat)
    //     {
    //         return response()->json(['medrecs'=>$riwayat], 200);
    //     }
    //     else{
    //         return response()->json(['message'=>'No record found.'], 404);
    //     }
    // }
}
