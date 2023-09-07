<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        return view('backend.master');
    }
    public function dashboard_show(){
        return view('backend.partials.dashboard');
    }
}
