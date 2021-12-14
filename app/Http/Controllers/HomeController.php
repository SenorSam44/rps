<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $results = Result::all();

        foreach ($results as $result){
            $total = round(($result->sub1+$result->sub2+$result->sub3+$result->sub4+$result->sub5+$result->sub6)/6);
            $result->cgpa = 5;
        }
        return view('welcome', [
            'results' => $results,
        ]);
    }

    public function index()
    {
        return view('home');
    }
}
