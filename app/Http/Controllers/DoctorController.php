<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{

    public function storeData(Request $request)
    {

        $data = new Doctor;

        $data->Name = $request->input('name');
        $data->Email = $request->input('email');
        $data->Phone = $request->input('phone');

        $data->save();

        //return $doctor = DB::get('doctors');

        return redirect('dashboard');
    }


    public function doctor()
    {
        $doctor = Doctor::all();

        //return $doctor = DB::get('doctors');

        return view('dashboard', compact('doctor'));
    }
}
