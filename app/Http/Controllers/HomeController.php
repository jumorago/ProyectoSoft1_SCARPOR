<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as Products;
use App\Models\States as States;

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
        $products = Products::all();
        return \View::make('home', compact('products'));
    }
}
