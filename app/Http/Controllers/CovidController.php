<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Patient;

class CovidController extends Controller
{
    public function get_countries()
    {
        $countries = DB::table("countries")->get();
        return response()->json(['countries'=> $countries ]);
    }

    public function get_patients()
    {
        $patients = Patient::all();
        return response()->json(['patients'=> $patients ]);
    }

    public function add_patient(Request $request)
    {
        $patient = Patient::create($request->all());
        return response()->json(['message'=> 'Successfully added'],200);
    }

    public function edit_patient(Request $request, $patient_id)
    {
        Patient::where('id', $patient_id)->update($request->all());
        
        return response()->json(['message'=> 'Successfully updated'],200);
    }

    public function delete_patient(Request $request, $patient_id)
    {
        Patient::where('id', $patient_id)->delete();
        
        return response()->json(['message'=> 'Successfully deleted'],200);
    }



}
