<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function single(){
        return view('works.portfolio-details');
    }

    public function single1(){
        return view('works.portfolio-details1');
    }

    public function single2(){
        return view('works.portfolio-details2');
    }

    public function single3(){
        return view('works.portfolio-details3');
    }

    public function about(){
        return view('layouts.about');
    }
}
