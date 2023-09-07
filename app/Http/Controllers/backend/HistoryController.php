<?php

namespace App\Http\Controllers\backend;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=History::all();
        return view('backend.history.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $data=History::all();
        return view('backend.history.create',compact('data'));
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
            History::create([
                'departname' => $request->departname,
                'departimage' => $fileName,
            ]);
            //return $request();
            return redirect()->route('history.index');
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
        $item=History::find($id);
        return view('backend.history.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'departname' => 'required',
        ]);
        $updateitem=History::find($id);
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
            return redirect()->route('history.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=History::find($id);
        File::delete(public_path($item->departimage));
         $item->delete();
         return redirect()->route('history.index');
    }
}
