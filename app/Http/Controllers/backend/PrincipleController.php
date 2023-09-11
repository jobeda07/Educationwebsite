<?php

namespace App\Http\Controllers\backend;

use App\Models\Principle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Principle::all();
        return view('backend.principle.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Principle::all();
        return view('backend.principle.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        try {          
            $fileName = null;
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Principleimage/'), $fileName);
                $fileName = "/uploads/Principleimage/".$fileName;
            }
            Principle::create([
                'name' => $request->name,
                'image' => $fileName,
                'description' => $request->description,
            ]);
            return redirect()->route('principle.index');
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
        $item=Principle::find($id);
        return view('backend.principle.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $updateitem=Principle::find($id);
        try {          
            if ($request->hasFile('image')) {
                File::delete(public_path($updateitem->image));
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Principleimage'), $fileName);
                $fileName = "/uploads/Principleimage/".$fileName;
                $updateitem->image=$fileName;
                $updateitem->update([
                    'name' => $request->name,
                    'image' => $fileName,
                    'description' => $request->description,
                ]);
             }
                else{
                    $updateitem->update([
                    'name' => $request->name,
                    'description' => $request->description,
                ]);
        }
            return redirect()->route('principle.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
