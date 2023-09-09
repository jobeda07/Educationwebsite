<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\History;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('frontend.pages.home');
    }
    public function teacherpage(){
        return view ('frontend.pages.teacher');
    }
    public function history(){
        $data=History::latest()->first();
        return view ('frontend.pages.history',compact('data'));
    }
    public function notice(){
        return view ('frontend.pages.notice');
    }
    public function principle(){
        return view ('frontend.pages.principle');
    }
    public function gallery(){
        $data=Gallery::all();
        return view ('frontend.pages.gallery',compact('data'));
    }
    public function contact(){
        return view ('frontend.pages.contact');
    }
}
