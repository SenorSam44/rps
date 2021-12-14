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
            if($total< 40){
                $cgpa = 0;
            }elseif($total<45){
                $cgpa = 2;
            }elseif($total<50){
                $cgpa = 2.25;
            }elseif($total<55){
                $cgpa = 2.50;
            }elseif($total<60){
                $cgpa = 2.75;
            }elseif($total<65){
                $cgpa = 3.00;
            }elseif($total<70){
                $cgpa = 3.25;
            }elseif($total<75){
                $cgpa = 3.50;
            }elseif($total<80){
                $cgpa = 3.75;
            }else{
                $cgpa = 4.00;
            }
            $result->cgpa = $cgpa;
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
