<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function layout(){
        // $data = Project::all();
        // return view('layouts.welcome',compact('data'));
        return view('layouts.welcome');
    }
}
