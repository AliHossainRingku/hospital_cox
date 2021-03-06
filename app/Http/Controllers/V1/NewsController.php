<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')
            ->select('news.*')
            ->get();
        //return response()->json($departments);
        return view('admin.news.manageNews',['news'=>$news]);
    }

    public function create()
    {
        return view('admin.news.addNews');
    }

    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'news_title' => ['required', 'unique:news', 'min:3']
        // ]);
        // if($validateData){
        //     $department = News::create($request->all());
        //     return redirect()->back()->with('msg','News save in database successfully!');
        // }

        //dd($request->all());
        $news = array();

        $news['news_title'] = $request->news_title;
        $news['news_description'] = $request->news_description;
        $news['news_url'] = $request->news_url;
        $news['publication_status'] = $request->publication_status;

        $dep_id = DB::table('news')->select('id')->get();
        $count = $dep_id->count();
        $max = $dep_id->max('id')+1;

        if ($request->hasFile('news_image')) {
            
            $image = $request->file('news_image');
            $name = $max.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images/news');
            $image->move($destinationPath, $name);
            //$this->save();

            //$totalPathName = 'public/uploaded_images/'.$name;
            //print_r($totalPathName) ;  
            $totalPathName = 'uploaded_images/news/'.$name;
            $news['news_image'] = $totalPathName;
            $success = DB::table('news')->insert($news);
            return redirect()->back()->with('msg','News added with image database successfully!'); 
        }

        $success = DB::table('news')->insert($news);
        return redirect()->back()->with('msg','News added without image database successfully!');
    }

    public function show($departmentId){
        $departments = DB::table('departments')
                    ->where('departments.publication_status','=',1)
                    ->get();
        return response()->json($courses);
    }

    public function update(Request $request, Course $department)
    {
        if($department->update($request->all())){
            return response()->json($department, 200);
        }
        return response()->json("Sorry! Not updated");
    }

    public function destroy(Department $department)
    {
        if($department->delete()){
            return response()->json("Deleted successfully!");
        }
        return response()->json("Sorry! Not deleted");
    }
}
