<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\TeacherDepartment;
use App\Http\Controllers\Controller;

class TeacherDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=TeacherDepartment::all();
        return view('backend.teacherdepartment.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $data=TeacherDepartment::all();
        return view('backend.teacherdepartment.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'departname' => 'required',
        ]);
        try {          
            $fileName = null;
            if ($request->hasFile('departimage')) {
                $fileName = time() . '.' . $request->file('departimage')->getclientOriginalExtension();
                $request->file('departimage')->move(public_path('/uploads/Departmentimage/'), $fileName);
                $fileName = "/uploads/Departmentimage/".$fileName;
            }
            TeacherDepartment::create([
                'departname' => $request->departname,
                'departimage' => $fileName,
            ]);
            //return $request();
            return redirect()->route('teacherdepartment.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
        //toast("Data delete permanently", "success");
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
         $item=TeacherDepartment::find($id);
        return view('backend.teacherdepartment.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'departname' => 'required',
        ]);
        $updateitem=TeacherDepartment::find($id);
        try {          
            if ($request->hasFile('departimage')) {
                File::delete(public_path($updateitem->departimage));
                $fileName = time() . '.' . $request->file('departimage')->getclientOriginalExtension();
                $request->file('departimage')->move(public_path('/uploads/Departmentimage'), $fileName);
                $fileName = "/uploads/Departmentimage/".$fileName;
                $updateitem->departimage=$fileName;
                $updateitem->update([
                    'departname' => $request->departname,
                    'departimage' => $fileName,
                ]);
             }
                else{
                    $updateitem->update([
                    'departname' => $request->departname,
                ]);
        }
            return redirect()->route('teacherdepartment.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $item=TeacherDepartment::find($id);
        File::delete(public_path($item->departimage));
         $item->delete();
         return redirect()->route('teacherdepartment.index');      
    }
}
