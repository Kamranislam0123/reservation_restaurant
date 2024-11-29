<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chefs;
use Illuminate\Http\Request;

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
        return view('lgreg');
    }
    public function home()
    {
        // $chef = Chefs::all();
        return view('website.home');
        // return view('website.home',compact('chef'));
    }
    public function chef()
    {
        $chef = Chefs::all();
        // return response()->json($chef);
        $ab='dff';
        return view('chefs.websiteChef',compact('ab'));
    }
//     public function category()
//    {
//     $category = Category::all();
//     return view('website.home',compact('category'));
//    }
}
