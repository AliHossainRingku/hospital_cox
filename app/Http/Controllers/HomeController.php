<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('frontend.home_content');
    }

    public function banners()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        return view('frontend.banners',['banners'=>$banners]);
    }

    public function departments()
    {
        $departments = DB::table('departments')
            ->select('departments.*')
            ->get();
        return view('frontend.manages.departments',['departments'=>$departments]);
    }

    public function doctors()
    {
        $doctors = DB::table('doctors')
            ->select('doctors.*')
            ->get();
        return view('frontend.manages.doctors',['doctors'=>$doctors]);
    }

    public function services()
    {
        $services = DB::table('services')
            ->select('services.*')
            ->get();        
            return view('frontend.manages.services',['services'=>$services]);
    }

    public function news()
    {
        $news = DB::table('news')
            ->select('news.*')
            ->where('news.publication_status',1)
            ->paginate(4);
            
        return view('frontend.manages.news',['news'=>$news]);
    }    

    public function reviews()
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
        return view('frontend.manages.reviews',['reviews'=>$reviews]);
    }


    ///SINGLE PAGE
    public function banner($id)
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->where('banners.id','=',$id)
            ->get();
        return view('frontend.single.banner',['banners'=>$banners]);
    }

    public function department($id)
    {
        $departments = DB::table('departments')
            ->select('departments.*')
            ->where('departments.id','=',$id)
            ->get();
    
        return view('frontend.single.department',['departments'=>$departments]);
    }

    public function doctor($id)
    {
        $doctors = DB::table('doctors')
            ->join('departments', 'departments.id','=','doctors.department_id')
            ->select('doctors.*','departments.*')
            ->where('doctors.id','=',$id)
            ->get();
        return view('frontend.single.doctor',['doctors'=>$doctors]);
    }

    public function service($id)
    {
        $services = DB::table('services')
            ->select('services.*')
            ->where('services.id','=',$id)
            ->get();        
            return view('frontend.single.service',['services'=>$services]);
    }

    public function new($id)
    {
        $news = DB::table('news')
            ->select('news.*')
            ->where('news.id','=',$id)
            ->get();
        return view('frontend.single.news',['news'=>$news]);
    }    

    public function review($id)
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->where('reviews.id','=',$id)
            ->get();
        return view('frontend.single.review',['reviews'=>$reviews]);
    }

    public function moreabout()
    {
        return view('frontend.single.moreabout');
    }

}
