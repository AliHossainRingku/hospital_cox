<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        //dd($request->all());
        $doctors = array();

        $doctors['doctor_name'] = $request->doctor_name;
        $doctors['department_id'] = $request->department_id;
        $doctors['doctor_designation'] = $request->doctor_designation;
        $doctors['doctor_description'] = $request->doctor_description;
        $doctors['publication_status'] = $request->publication_status;

        $news_id = DB::table('doctors')->select('id')->get();
        $count = $news_id->count();
        $max = $news_id->max('id')+1;

        if ($request->hasFile('doctor_image')) {
            
            $image = $request->file('doctor_image');
            $name = $max.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images');
            $image->move($destinationPath, $name);
            //$this->save();

            $totalPathName = 'public/uploaded_images/'.$name;
            //print_r($totalPathName) ;
            $doctors['doctor_image'] = $totalPathName;
            $success = DB::table('doctors')->insert($doctors);
            return redirect()->back()->with('msg','Doctor added with image database successfully!'); 
        }

        $success = DB::table('doctors')->insert($news);
        return redirect()->back()->with('msg','Doctor added without image database successfully!');

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
