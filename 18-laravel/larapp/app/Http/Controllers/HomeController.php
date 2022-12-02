<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth', ['except' => ['welcome', 'gamesbycat'] ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'Admin') {
            return view('home');
            //return view('dashboard-admin');
        } 
        else if(Auth::user()->role == 'Customer') {
            return view('home');
            //return view('dashboard-customer');
        } else {
            return "Access Denied!";
        } 
    }

    public function welcome() {
        $sliders = Game::where('slider', 1)->get();
        $cats    = Category::all();
        $games   = Game::all();

      return view('welcome')->with('sliders', $sliders)
                              ->with('cats', $cats)
                              ->with('games', $games);
    }

    public function gamesbycat(Request $request) {
        if ($request->idcat == 0) {
            // All Categories
            $cats    = Category::all();
            $games    = Game::all();
            return view('gamesbycat')->with('cats', $cats)
                                    ->with('games', $games);
        } else {
            // By Category
            $cat     = Category::where('id', '=', $request->idcat)->first();
            $games   = Game::where('category_id', '=', $request->idcat)->get();
            return view('gamesbycat')->with('cat', $cat)
                                    ->with('games', $games);
        }
    }
}
