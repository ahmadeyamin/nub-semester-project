<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $houses = House::with('firstImage')->latest()->paginate(16);
        return view('home',compact("houses"));
    }
    public function show(House $house)
    {
        return view('view-house',compact("house"));
    }
}
