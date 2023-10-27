<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Gallery;
use App\Models\History;
use App\Models\Teacher;
use App\Models\NewsModel;
use App\Models\Principle;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Validator;


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

    // Admission form
    public function admission_form(){
        return view ('frontend.pages.admissionform');
    }
    public function admission_store(Request $request){
          $request->validate([
            'name' => 'required|max:50',
            'fathers_name' => 'required|max:50',
            'mothers_name' => 'required|max:50',
            //'image' => 'required|image|mimes:png,jpg',
            'email' => 'required|email|unique:admissions,email', // Replace 'users' and 'email' with actual table and column names
            'number' => 'required|digits:11',
            'dob' => 'required',
            'gender' => 'required',
            'division' => 'required',
            'district' => 'required',
            'address' => 'required',
            'guardian_name' => 'required',
            'guardian_number' => 'required',
            'class_id' => 'required',
            'src_input' => 'mimes:pdf', // Allow PDF files or adjust as needed
        ]);

        return $request;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $image = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Admissionimage/'), $image);
                $image = "/uploads/Admissionimage/" . $image;
            }
        
        Admission::create([
                'name' => $request->name,
                'fathers_name' => $request->fathers_name,
                'mothers_name' => $request->mothers_name,
                'email' => $request->email,
                'number' => $request->number,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'image' => $image,
                'division' => $request->division,
                'district' => $request->district,
                'address' => $request->address,
                'guardian_name' => $request->guardian_name,
                'guardian_number' => $request->guardian_number,
                'class_id' => $request->class_id,
                'src_input' => $request->src_input,
            ]);
        
        //Toastr::success('Information Added Successfully','success');
        return redirect()->back();
    }
}