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
        $validateData = $request->validate([
            'news_title' => ['required', 'unique:news', 'min:3']
        ]);
        if($validateData){
            $department = News::create($request->all());
            return redirect()->back()->with('msg','News save in database successfully!');
        }
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
