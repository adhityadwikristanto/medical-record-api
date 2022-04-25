<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    //
    public function index()
    {
        $rumah_sakit = RumahSakit::all();
        return response()->json(['rumah_sakits'=>$rumah_sakit], 200);
    }

    public function find($id)
    {
        $rumah_sakit = RumahSakit::find($id);
        if($rumah_sakit)
        {
            return response()->json(['rumah_sakits'=>$rumah_sakit], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'jenis'=>'required',
            'kelas'=>'required',
            'kepemilikan'=>'required',
            'tempat_tidur'=>'required',
        ]);

        $rumah_sakit = new RumahSakit;
        $rumah_sakit->nama = $request->nama;
        $rumah_sakit->alamat = $request->alamat;
        $rumah_sakit->jenis = $request->jenis;
        $rumah_sakit->kelas = $request->kelas;
        $rumah_sakit->namkepemilikana = $request->kepemilikan;
        $rumah_sakit->tempat_tidur = $request->tempat_tidur;
        $rumah_sakit->save();
        return response()->json(['message'=>'Rumah Sakit berhasil ditambahkan.'], 200);
    }
}
