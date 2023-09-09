<?php

namespace App\Http\Controllers\backend;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\TeacherDepartment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $department=TeacherDepartment::all();
        $data=Teacher::all();
        return view('backend.teacher.index',compact('department','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        $department=TeacherDepartment::all();
        return view('backend.teacher.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
            'number' => 'required|numeric|digits:11',
            'address' => 'required',
            'department_id' => 'required',
            'position' => 'required',
        ]);
        try {          
            $fileName = null;
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Teacherimage/'), $fileName);
                $fileName = "/uploads/Teacherimage/".$fileName;
            }
            Teacher::create([
                'name' => $request->name,
                'image' => $fileName,
                'email' => $request->email,
                'number' => $request->number,
                'address' => $request->address,
                'department_id' => $request->department_id,
                'position' => $request->position,
            ]);
            return redirect()->route('teacher.index');
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
        $department=TeacherDepartment::all();
         $item=Teacher::find($id);
        return view('backend.teacher.create',compact('item','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|numeric|digits:11',
            'address' => 'required',
            'department_id' => 'required',
            'position' => 'required',
        ]);
        $updateitem=Teacher::find($id);
        try {          
            if ($request->hasFile('image')) {
                File::delete(public_path($updateitem->image));
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Teacherimage'), $fileName);
                $fileName = "/uploads/Teacherimage/".$fileName;
                $updateitem->image=$fileName;
                $updateitem->update([
                    'name' => $request->name,
                    'image' => $fileName,
                    'email' => $request->email,
                    'number' => $request->number,
                    'address' => $request->address,
                    'department_id' => $request->department_id,
                    'position' => $request->position,
                ]);
             }
                else{
                    $updateitem->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'number' => $request->number,
                        'address' => $request->address,
                        'department_id' => $request->department_id,
                        'position' => $request->position,
                ]);
        }
            return redirect()->route('teacher.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Teacher::find($id);
        File::delete(public_path($item->image));
        $item->delete();
        return redirect()->route('teacher.index');
    }
}
