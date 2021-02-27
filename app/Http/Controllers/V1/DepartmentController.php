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
        $validateData = $request->validate([
            'department_name' => ['required', 'unique:departments', 'min:3']
        ]);
        if($validateData){
            $department = Department::create($request->all());
            return redirect()->back()->with('msg','Department save in database successfully!');
        }
    }

    public function show($departmentId){
        $departments = DB::table('departments')
                    ->where('departments.publication_status','=',1)
                    ->get();
        return response()->json($departments);
    }

    public function update(Request $request, Department $department)
    {
        if($department->update($request->all())){
            return response()->json($department, 200);
        }
        return response()->json("Sorry! Not updated");
    }

    public function destroy(Department $department)
    {
        dd($request->all());

        // if($department->delete()){
        //     return response()->json("Deleted successfully!");
        // }
        // return response()->json("Sorry! Not deleted");
    }

}
