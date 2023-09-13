<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Teacher;
use App\Models\NewsModel;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // public function dashboard(){
    //     return view('backend.master');
    // }
    public function dashboard(){
        $totalnotice=Notice::all()->count();
        $totalnews=NewsModel::all()->count();
        $totalteacher=Teacher::all()->count();
        return view('backend.partials.dashboard',compact('totalnotice','totalnews','totalteacher'));
    }
}
