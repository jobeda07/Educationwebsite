<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Teacher;
use App\Models\NewsModel;
use App\Models\Principle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $news=NewsModel::orderBy('created_at', 'desc')->take(6)->get();
        $notice=Notice::orderBy('created_at', 'desc')->take(6)->get();
        $principle=Principle::latest()->first();
        return view ('frontend.pages.home',compact('news','notice','principle'));
    }
    public function singlenewsview($title){
        $singlenewsview =NewsModel::where('title', 'LIKE', "%{$title}%")->first();
        return view ('frontend.pages.singlenewsview',compact('singlenewsview'));
    }
    public function allnewsView(){
        $allnewsView = NewsModel::all();
        return view ('frontend.pages.allnewsshow',compact('allnewsView'));
    }
    public function teacherpage(){
        $data=Teacher::orderBy('created_at', 'asc')->get();
        return view ('frontend.pages.teacher',compact('data'));
    }
    public function history(){
        $data=History::latest()->first();
        return view ('frontend.pages.history',compact('data'));
    }
    public function notice(){
        $data=Notice::orderBy('created_at', 'desc')->get();
        return view ('frontend.pages.notice',compact('data'));
    }
    public function principle(){
        $data=Principle::latest()->first();
        return view ('frontend.pages.principle',compact('data'));
    }
    public function gallery(){
        $data=Gallery::all();
        return view ('frontend.pages.gallery',compact('data'));
    }
    public function contact(){
        return view ('frontend.pages.contact');
    }
}
