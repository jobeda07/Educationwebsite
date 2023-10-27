<?php

namespace App\Http\Controllers\backend;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=ClassModel::all();
        return view('backend.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
        ]);
        try { 
            ClassModel::create([
                'name' => $request->name,
            ]);
            Alert::success('Successfully Add class');
            return redirect()->back();
        } catch (Exception $e) {
            return redirect()->back();
        }
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
        $classes=ClassModel::all();
        $item=ClassModel::find($id);
        return view('backend.class.index',compact('classes','item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            'name' => 'required',
        ]);
        try { 
                $updateitem=ClassModel::find($id);
                $updateitem->update([
                    'name' => $request->name,
            ]);  
        Alert::success('Successfully Update class');
            return redirect()->route('class.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class=ClassModel::find($id)->delete();
        Alert::success('Successfully Delete class');
        return redirect()->route('class.index');
    }
}
