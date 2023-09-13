<?php

namespace App\Http\Controllers\backend;

use App\Models\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

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
            'title' => 'required|max:300',
            'image' => 'required|image|mimes:jpeg,png,jpg|',
            'description' => 'required|max:5000',
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
            Alert::success('Successfully News Submitted', 'Success Message');

            return redirect()->route('news.index');
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
        $item=NewsModel::find($id);
        return view('backend.news.create',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'title' => 'required|max:300',
            'image' => 'image|mimes:jpeg,png,jpg',
            'description' => 'required|max:5000',
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
        Alert::success('Successfully News Updated');
            return redirect()->route('news.index');
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
        $item=NewsModel::find($id);
        File::delete(public_path($item->image));
        $item->delete();
        Alert::success('Opps! News deleted');
        return redirect()->route('news.index');      
    }
}
