<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
        public function index()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        return view('admin.banner.manageBanner',['banners'=>$banners]);
    }

    public function create()
    {
        return view('admin.banner.addBanner');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'banner_title' => ['required', 'unique:banners', 'min:3']
        ]);
        if($validateData){
            $banner = Banner::create($request->all());
            return redirect()->back()->with('msg','Banner save in database successfully!');
        }
    }

    public function show($bannerId){
        $banners = DB::table('banners')
                    ->where('banners.publication_status','=',1)
                    ->get();
        return response()->json($banners);
    }

    public function update(Request $request, Banner $department)
    {
        if($department->update($request->all())){
            return response()->json($department, 200);
        }
        return response()->json("Sorry! Not updated");
    }

    public function destroy(Banner $department)
    {
        dd($request->all());

        // if($department->delete()){
        //     return response()->json("Deleted successfully!");
        // }
        // return response()->json("Sorry! Not deleted");
    }
}
