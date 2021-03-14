<?php

namespace App\Http\Controllers\V1;
use App\Http\Controllers\Controller;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
        public function index()
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
        return view('admin.review.manageReview',['reviews'=>$reviews]);
    }

    public function create()
    {
        return view('admin.review.addReview');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_name' => ['required', 'unique:reviews', 'min:3']
        ]);
        if($validateData){
            $review = Review::create($request->all());
            return redirect()->back()->with('msg','Review save in database successfully!');
        }
    }

    public function show($reviewId){
        $reviews = DB::table('reviews')
                    ->where('reviews.publication_status','=',1)
                    ->get();
        return response()->json($reviews);
    }

    public function update(Request $request, Department $department)
    {
        if($department->update($request->all())){
            return response()->json($department, 200);
        }
        return response()->json("Sorry! Not updated");
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;
        $success = DB::table('reviews')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Review deleted with image  successfully!');
        
    }
}
