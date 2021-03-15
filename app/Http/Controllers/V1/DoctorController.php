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

        $doctor_id = DB::table('doctors')->select('id')->get();
        $count = $doctor_id->count();
        $max = $doctor_id->max('id')+1;

        if ($request->hasFile('doctor_image')) {
            
            $image = $request->file('doctor_image');
            $name = $max.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images/doctors');
            $image->move($destinationPath, $name);
            //$this->save();

            //$totalPathName = 'public/uploaded_images/'.$name;
            //print_r($totalPathName) ;  
            $totalPathName = 'uploaded_images/doctors/'.$name;
            $doctors['doctor_image'] = $totalPathName;
            $success = DB::table('doctors')->insert($doctors);
            return redirect()->back()->with('msg','Doctor added with image database successfully!'); 
        }

        $success = DB::table('doctors')->insert($news);
        return redirect()->back()->with('msg','Doctor added without image database successfully!');

    }

    public function show($id){
        $edit_doctors = DB::table('doctors')
                    ->where('doctors.id','=',$id)
                    ->get();
        return view('admin.doctor.editDoctor',['edit_doctors'=>$edit_doctors]);
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;

        $doctors = array();
        $doctors['doctor_name'] = $request->doctor_name;
        $doctors['department_id'] = $request->department_id;
        $doctors['doctor_designation'] = $request->doctor_designation;
        $doctors['doctor_description'] = $request->doctor_description;
        $doctors['publication_status'] = $request->publication_status;

        if ($request->hasFile('doctor_image')) {
            $image = $request->file('doctor_image');
            $name = $id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images\doctors');
            $image->move($destinationPath, $name);
  
            $totalPathName = 'uploaded_images/doctors/'.$name;
            $doctors['doctor_image'] = $totalPathName;
            $success = DB::table('doctors')->where('id','=',$id)->update($doctors);
            return redirect()->back()->with('msg','Doctor updated with image successfully!'); 
        }

        $success = DB::table('doctors')->where('id','=',$id)->update($doctors);
        return redirect()->back()->with('msg','Doctor updated without image database successfully!');
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;
        $success = DB::table('doctors')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Doctor deleted with image  successfully!');
        
    }
}
