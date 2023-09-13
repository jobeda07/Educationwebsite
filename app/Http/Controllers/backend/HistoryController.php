<?php

namespace App\Http\Controllers\backend;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

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
            'first_history' => 'required|max:1500',
            'second_history' => 'required|max:1500',
            'third_history' => 'required|max:1500',
            'first_image' => 'required|image|mimes:jpeg,jpg,png',
            'second_image' => 'required|image|mimes:jpeg,jpg,png',
            'third_image' => 'required|image|mimes:jpeg,jpg,png',
        ]);
        try {
                $first_image = null;
                $second_image = null;
                $third_image = null;
            if ($request->hasFile('first_image') && $request->file('first_image')->isValid()) {
                $first_image = time() . '.' . $request->file('first_image')->getClientOriginalExtension();
                $request->file('first_image')->move(public_path('/uploads/Historyimage/'), $first_image);
                $first_image = "/uploads/Historyimage/" . $first_image;
            }
            if ($request->hasFile('second_image') && $request->file('second_image')->isValid()) {
                $second_image = time() . '.' . $request->file('second_image')->getClientOriginalExtension();
                $request->file('second_image')->move(public_path('/uploads/Historyimage/'), $second_image);
                $second_image = "/uploads/Historyimage/" . $second_image;
            }
            if ($request->hasFile('third_image') && $request->file('third_image')->isValid()) {
                $third_image = time() . '.' . $request->file('third_image')->getClientOriginalExtension();
                $request->file('third_image')->move(public_path('/uploads/Historyimage/'), $third_image);
                $third_image = "/uploads/Historyimage/" . $third_image;
            }
            History::create([
                'first_history' => $request->first_history,
                'second_history' => $request->second_history,
                'third_history' => $request->third_history,
                'first_image' => $first_image,
                'second_image' => $second_image,
                'third_image' => $third_image,
            ]);
            Alert::success('Successfully Add History');
            return redirect()->route('history.index');
        } catch (Exception $e) {
            Alert::error($e->getMessage(), 'Server Error');
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
            'first_history' => 'required|max:1500',
            'second_history' => 'required|max:1500',
            'third_history' => 'required|max:1500',
            'first_image' => 'image|mimes:jpeg,jpg,png',
            'second_image' => 'image|mimes:jpeg,jpg,png',
            'third_image' => 'image|mimes:jpeg,jpg,png',
        ]);
        $updateitem=History::find($id);
        try {
            
            if($request->hasFile('first_image')){
                 if ($request->hasFile('first_image')) {
                File::delete(public_path($updateitem->first_image));
                $first_image = time() . '.' . $request->file('first_image')->getclientOriginalExtension();
                $request->file('first_image')->move(public_path('/uploads/Historyimage'), $first_image);
                $first_image = "/uploads/Historyimage/" . $first_image;
                }
                  $updateitem->update([
                    'first_history' => $request->first_history,
                    'second_history' => $request->second_history,
                    'third_history' => $request->third_history,
                    'first_image' => $first_image,
                ]);
            }
            elseif($request->hasFile('second_image')){
                if ($request->hasFile('second_image')) {
                File::delete(public_path($updateitem->second_image));
                $second_image = time() . '.' . $request->file('second_image')->getclientOriginalExtension();
                $request->file('second_image')->move(public_path('/uploads/Historyimage'), $second_image);
                $second_image = "/uploads/Historyimage/" . $second_image;
                }
                  $updateitem->update([
                    'first_history' => $request->first_history,
                    'second_history' => $request->second_history,
                    'third_history' => $request->third_history,
                    'second_image' => $second_image,
                ]);
            }
            elseif($request->hasFile('third_image')){
                if ($request->hasFile('third_image')) {
                File::delete(public_path($updateitem->third_image));
                $third_image = time() . '.' . $request->file('third_image')->getclientOriginalExtension();
                $request->file('third_image')->move(public_path('/uploads/Historyimage'), $third_image);
                $third_image = "/uploads/Historyimage/" . $third_image;
                }
                  $updateitem->update([
                    'first_history' => $request->first_history,
                    'second_history' => $request->second_history,
                    'third_history' => $request->third_history,
                    'third_image' => $third_image,
                ]);
            }
            elseif ($request->hasFile('first_image','second_image','third_image')){
                if ($request->hasFile('first_image')) {
                File::delete(public_path($updateitem->first_image));
                $first_image = time() . '.' . $request->file('first_image')->getclientOriginalExtension();
                $request->file('first_image')->move(public_path('/uploads/Historyimage'), $first_image);
                $first_image = "/uploads/Historyimage/" . $first_image;
                }
                if ($request->hasFile('second_image')) {
                File::delete(public_path($updateitem->second_image));
                $second_image = time() . '.' . $request->file('second_image')->getclientOriginalExtension();
                $request->file('second_image')->move(public_path('/uploads/Historyimage'), $second_image);
                $second_image = "/uploads/Historyimage/" . $second_image;
                }
                if ($request->hasFile('third_image')) {
                File::delete(public_path($updateitem->third_image));
                $third_image = time() . '.' . $request->file('third_image')->getclientOriginalExtension();
                $request->file('third_image')->move(public_path('/uploads/Historyimage'), $third_image);
                $third_image = "/uploads/Historyimage/" . $third_image;
                }
                    $updateitem->update([
                    'first_history' => $request->first_history,
                    'second_history' => $request->second_history,
                    'third_history' => $request->third_history,
                    'first_image' => $first_image,
                    'second_image' => $second_image,
                    'third_image' => $third_image,
                ]);
            }
            else{
                  $updateitem->update([
                'first_history' => $request->first_history,
                'second_history' => $request->second_history,
                'third_history' => $request->third_history,
            ]);
            }
            Alert::success('Successfully History Update');
            return redirect()->route('history.index');
        } catch (Exception $e) {
            Alert::error($e->getMessage(), 'Server Error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $item=History::find($id)->delete();
        return redirect()->route('history.index');
    }
}
