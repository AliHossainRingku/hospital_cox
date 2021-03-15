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

    public function show($id){
        $edit_reviews = DB::table('reviews')
                    ->where('reviews.id','=',$id)
                    ->get();
        return view('admin.review.editReview',['edit_reviews'=>$edit_reviews]);
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;

        $reviews = array();
        $reviews['user_name'] = $request->user_name;
        $reviews['review_description'] = $request->review_description;
        $reviews['rating'] = $request->rating;
        $reviews['publication_status'] = $request->publication_status;

        if ($request->hasFile('review_image')) {
            $image = $request->file('review_image');
            $name = $id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploaded_images\reviews');
            $image->move($destinationPath, $name);
  
            $totalPathName = 'uploaded_images/reviews/'.$name;
            $reviews['review_image'] = $totalPathName;
            $success = DB::table('reviews')->where('id','=',$id)->update($reviews);
            return redirect()->back()->with('msg','Review updated with image successfully!'); 
        }

        $success = DB::table('reviews')->where('id','=',$id)->update($reviews);
        return redirect()->back()->with('msg','Review updated without image database successfully!');
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $id = $request->inputId;
        $success = DB::table('reviews')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg','Review deleted with image  successfully!');
        
    }
}
