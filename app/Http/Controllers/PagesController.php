<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome To Fitnest";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About Fitnest";  
        return view('pages.about')->with('title',$title);
    }

    public function fitnest(){
        $title = "Your Fitnest";  
        return view('pages.fitnest')->with('title',$title);
    }
}
