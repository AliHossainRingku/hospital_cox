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
        // $validateData = $request->validate([
        //     'service_name' => ['required', 'unique:services', 'min:3']
        // ]);
        // if($validateData){
        //     $services = Service::create($request->all());
        //     return redirect()->back()->with('msg','Dervice save in database successfully!');
        // }

        $services = array();

        $services['service_name'] = $request->service_name;
        $services['service_description'] = $request->service_description;
        $services['available_time'] = $request->available_time;
        $services['publication_status'] = $request->publication_status;

        $dep_id = DB::table('services')->select('id')->get();
        $count = $dep_id->count();
        $max = $dep_id->max('id')+1;

        if ($request->hasFile('service_image')) {
            
            $image = $request->file('service_image');
            $name = $max.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images/services');
            $image->move($destinationPath, $name);
            //$this->save();

            //$totalPathName = 'public/uploaded_images/'.$name;
            //print_r($totalPathName) ;  
            $totalPathName = 'uploaded_images/services/'.$name;
            $services['service_image'] = $totalPathName;
            $success = DB::table('services')->insert($services);
            return redirect()->back()->with('msg','Services added with image database successfully!'); 
        }

        $success = DB::table('services')->insert($services);
        return redirect()->back()->with('msg','Services added without image database successfully!');
    }

    public function show($id){
        $edit_services = DB::table('services')
                    ->where('services.id','=',$id)
                    ->get();
        return view('admin.service.editService',['edit_services'=>$edit_services]);
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;

        $services = array();
        $services['service_name'] = $request->service_name;
        $services['service_description'] = $request->service_description;
        $services['publication_status'] = $request->publication_status;

        if ($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $name = $id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images\services');
            $image->move($destinationPath, $name);
  
            $totalPathName = 'uploaded_images/services/'.$name;
            $services['service_image'] = $totalPathName;
            $success = DB::table('services')->where('id','=',$id)->update($services);
            return redirect()->back()->with('msg','Service updated with image successfully!'); 
        }

        $success = DB::table('services')->where('id','=',$id)->update($services);
        return redirect()->back()->with('msg','Service updated without image database successfully!');
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;
        $success = DB::table('services')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Service deleted with image  successfully!');
        
    }
}
