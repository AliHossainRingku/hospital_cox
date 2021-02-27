<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = DB::table('doctors')
            ->select('doctors.*')
            ->get();
        return view('admin.doctor.manageDoctor',['doctors'=>$doctors]);
    }

    public function create()
    {
        return view('admin.doctor.addDoctor');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'doctor_name' => ['required', 'unique:doctors', 'min:3']
        ]);
        if($validateData){
            $doctors = Doctor::create($request->all());
            return redirect()->back()->with('msg','Doctor save in database successfully!');
        }
    }

    public function show($doctorId){
        $doctors = DB::table('doctors')
                    ->where('doctors.publication_status','=',1)
                    ->get();
        return response()->json($doctors);
    }

    public function update(Request $request, Course $doctor)
    {
        if($doctor->update($request->all())){
            return response()->json($doctor, 200);
        }
        return response()->json("Sorry! Not updated");
    }

    public function destroy(Doctor $doctor)
    {
        if($doctor->delete()){
            return response()->json("Deleted successfully!");
        }
        return response()->json("Sorry! Not deleted");
    }
}
