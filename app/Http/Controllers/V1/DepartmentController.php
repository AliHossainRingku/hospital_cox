<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = DB::table('departments')
            ->select('departments.*')
            ->get();
        //return response()->json($departments);
        return view('admin.department.manageDepartment',['departments'=>$departments]);
    }

    public function create()
    {
        return view('admin.department.addDepartment');
    }

    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'department_name' => ['required', 'unique:departments', 'min:3']
        // ]);

        // if($validateData){
        //     $department = Department::create($request->all());
        //     return redirect()->back()->with('msg','Department save in database successfully!');
        // }

        //dd($request->all());
        $departments = array();

        $departments['department_name'] = $request->department_name;
        $departments['department_description'] = $request->department_description;
        $departments['publication_status'] = $request->publication_status;

        $dep_id = DB::table('departments')->select('id')->get();
        $count = $dep_id->count();
        $max = $dep_id->max('id')+1;

        if ($request->hasFile('department_image')) {
            
            $image = $request->file('department_image');
            $name = $max.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images/departments');
            $image->move($destinationPath, $name);
            //$this->save();

            //$totalPathName = 'public/uploaded_images/'.$name;
            //print_r($totalPathName) ;  
            $totalPathName = 'uploaded_images/departments/'.$name;
            $departments['department_image'] = $totalPathName;
            $success = DB::table('departments')->insert($departments);
            return redirect()->back()->with('msg','Departments added with image database successfully!'); 
        }

        $success = DB::table('departments')->insert($departments);
        return redirect()->back()->with('msg','Departments added without image database successfully!');

    }

    public function show($id){
        $edit_department = DB::table('departments')
                    ->where('departments.id','=',$id)
                    ->get();
        return view('admin.department.editDepartment',['edit_department'=>$edit_department]);
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;

        $departments = array();
        $departments['department_name'] = $request->department_name;
        $departments['department_description'] = $request->department_description;
        $departments['publication_status'] = $request->publication_status;

        if ($request->hasFile('department_image')) {
            $image = $request->file('department_image');
            $name = $id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images\departments');
            $image->move($destinationPath, $name);
  
            $totalPathName = 'uploaded_images/departments/'.$name;
            $departments['department_image'] = $totalPathName;
            $success = DB::table('departments')->where('id','=',$id)->update($departments);
            return redirect()->back()->with('msg','Banner update with image database successfully!'); 
        }

        $success = DB::table('departments')->where('id','=',$id)->update($departments);
        return redirect()->back()->with('msg','Department updated without image database successfully!');
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;
        $success = DB::table('departments')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Department deleted with image  successfully!');
        
    }

}
