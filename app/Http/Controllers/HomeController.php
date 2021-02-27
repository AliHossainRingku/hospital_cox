<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = DB::table('departments')
            ->select('departments.*')
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

        return view('home',['departments'=>$departments, 'doctors'=>$doctors, 'services'=>$services, 'news'=>$news, 'banners'=>$banners, 'reviews'=>$reviews,]);
    }

    public function banners()
    {
        $banners = DB::table('banners')
            ->select('banners.*')
            ->get();
        return view('banners',['banners'=>$banners]);
    }

    public function departments()
    {
        $departments = DB::table('departments')
            ->select('departments.*')
            ->get();
        return view('departments',['departments'=>$departments]);
    }

    public function doctors()
    {
        $doctors = DB::table('doctors')
            ->select('doctors.*')
            ->get();
        return view('doctors',['doctors'=>$doctors]);
    }

    public function services()
    {
        $services = DB::table('services')
            ->select('services.*')
            ->get();        
            return view('services',['services'=>$services]);
    }

    public function news()
    {
        $news = DB::table('news')
            ->select('news.*')
            ->get();
        return view('news',['news'=>$news]);
    }    

    public function reviews()
    {
        $reviews = DB::table('reviews')
            ->select('reviews.*')
            ->get();
        return view('reviews',['reviews'=>$reviews]);
    }






}
