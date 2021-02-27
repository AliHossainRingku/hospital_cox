<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
        public function index()
    {
        $services = DB::table('services')
            ->select('services.*')
            ->get();
        return view('admin.service.manageService',['services'=>$services]);
    }

    public function create()
    {
        return view('admin.service.addService');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'service_name' => ['required', 'unique:services', 'min:3']
        ]);
        if($validateData){
            $services = Service::create($request->all());
            return redirect()->back()->with('msg','Dervice save in database successfully!');
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
