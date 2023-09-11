<?php

namespace App\Http\Controllers\backend;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=NewsModel::all();
        return view('backend.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $data=NewsModel::all();
        return view('backend.news.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        try {          
            $fileName = null;
            if ($request->hasFile('image')) {
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Newsimage/'), $fileName);
                $fileName = "/uploads/Newsimage/".$fileName;
            }
            NewsModel::create([
                'title' => $request->title,
                'image' => $fileName,
                'description' => $request->description,
            ]);
            return redirect()->route('news.index');
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
        $item=NewsModel::find($id);
        return view('backend.news.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $updateitem=NewsModel::find($id);
        try {          
            if ($request->hasFile('image')) {
                File::delete(public_path($updateitem->image));
                $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
                $request->file('image')->move(public_path('/uploads/Newsimage'), $fileName);
                $fileName = "/uploads/Newsimage/".$fileName;
                $updateitem->image=$fileName;
                $updateitem->update([
                    'title' => $request->title,
                    'image' => $fileName,
                    'description' => $request->description,
                ]);
             }
                else{
                    $updateitem->update([
                    'title' => $request->title,
                    'description' => $request->description,
                ]);
        }
            return redirect()->route('news.index');
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=NewsModel::find($id);
        File::delete(public_path($item->image));
        $item->delete();
        return redirect()->route('news.index');      
    }
}
