<?php

namespace App\Http\Controllers\backend;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Notice::orderBy('created_at', 'desc')->get();
        return view('backend.notice.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:250',
            'notice_pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $fileName = null;
        if ($request->hasFile('notice_pdf')) {
            $fileName = time() . '.' . $request->file('notice_pdf')->getClientOriginalExtension();
            $request->file('notice_pdf')->move(public_path('/uploads/NoticePdf/'), $fileName);
            $fileName = "/uploads/NoticePdf/".$fileName;
        }

        Notice::create([
            'title' => $request->title,
            'notice_pdf' => $fileName,
        ]);
        Alert::success('Successfully Add Notice');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $item=Notice::find($id);
         File::delete(public_path($item->notice_pdf));
         $item->delete();
          Alert::success('Opps! Notice deleted');
         return redirect()->route('notice.index');  
    }
}
