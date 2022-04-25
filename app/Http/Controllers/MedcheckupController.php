<?php

namespace App\Http\Controllers;

use App\Models\Medcheckup;
use Illuminate\Http\Request;

class MedcheckupController extends Controller
{
    //
    public function index()
    {
        $medcheckup = Medcheckup::all();
        return response()->json(['medcheckups'=>$medcheckup], 200);
    }

    public function find($id)
    {
        $medcheckup = Medcheckup::find($id);
        if($medcheckup)
        {
            return response()->json(['medcheckups'=>$medcheckup], 200);
        }
        else{
            return response()->json(['message'=>'No record found.'], 404);
        }
    }

    public function insert(Request $request)
    {
        $request->validate([
            'id_medrec'=>'required',
            'id_rs'=>'required',
            'tanggal'=>'required',
            'tinggi_badan'=>'required',
            'berat_badan'=>'required',
            'pregnancies'=>'required',
            'glucose'=>'required',
            'blood_pressure'=>'required',
            'skin_thickness'=>'required',
            'insulin'=>'required',
            // 'bmi'=>'required',
            'diabetes_pedigree_fx'=>'required',
            'age'=>'required',
        ]);

        $medcheckup = new Medcheckup;
        $medcheckup->id_medrec = $request->id_medrec;
        $medcheckup->id_rs = $request->id_rs;
        $medcheckup->tanggal = $request->tanggal;
        $medcheckup->tinggi_badan = $request->tinggi_badan;
        $medcheckup->berat_badan = $request->berat_badan;
        $medcheckup->pregnancies = $request->pregnancies;
        $medcheckup->glucose = $request->glucose;
        $medcheckup->blood_pressure = $request->blood_pressure;
        $medcheckup->skin_thickness = $request->skin_thickness;
        $medcheckup->insulin = $request->insulin;
        // $medcheckup->bmi = $request->bmi;
        $medcheckup->bmi = $request->berat_badan/(($request->tinggi_badan/100)^2);
        $medcheckup->diabetes_pedigree_fx = $request->diabetes_pedigree_fx;
        $medcheckup->age = $request->age;
        $medcheckup->save();
        return response()->json(['message'=>'Medical check up berhasil direkam.'], 200);
    }
}
