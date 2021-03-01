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
        // $departments = DB::table('departments')
        //     ->select('departments.*')
        //     ->get();
        // $doctors = DB::table('doctors')
        //     ->select('doctors.*')
        //     ->get();
        // $services = DB::table('services')
        //     ->select('services.*')
        //     ->get();
        // $news = DB::table('news')
        //     ->select('news.*')
        //     ->get();
        // $banners = DB::table('banners')
        //     ->select('banners.*')
        //     ->get();
        // $reviews = DB::table('reviews')
        //     ->select('reviews.*')
        //     ->get();

        return view('frontend.home_content');//,['departments'=>$departments, 'doctors'=>$doctors, 'services'=>$services, 'news'=>$news, 'banners'=>$banners, 'reviews'=>$reviews,]
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
        return view('frontend.doctors',['doctors'=>$doctors]);
    }

    public function services()
    {
        $services = DB::table('services')
            ->select('services.*')
            ->get();        
            return view('frontend.services',['services'=>$services]);
    }

    public function news()
    {
        $news = DB::table('news')
            ->select('news.*')
            ->get();
        return view('frontend.news',['news'=>$news]);
    }    

    public function reviews()
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
        return view('frontend.reviews',['reviews'=>$reviews]);
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
      
        $doctors = DB::table('doctors')
            ->select('doctors.*')
            ->get();
        $services = DB::table('services')
            ->select('services.*')
            ->get();
        $news = DB::table('news')
            ->select('news.*')
            ->get();
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
            
        return view('frontend.single.department',['departments'=>$departments, 'doctors'=>$doctors, 'services'=>$services,  'news'=>$news, 'banners'=>$banners, 'reviews'=>$reviews, ]);
    }

    public function doctor($id)
    {
        $doctors = DB::table('doctors')
            ->select('doctors.*')
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

}
