<?php

namespace App\Http\Controllers\backend;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::latest()->get();
        return view('backend.gallery.index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource gimage.
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
            //'gimage' => 'required|image|mimes:jpeg,png,jpg|max:12288'
        ]);
        try {   

            $filenames = [];

            if ($request->hasFile('gimage')) {
                foreach ($request->file('gimage') as $key => $file) {
                    $fileName = time() . '_' . $key . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads/Galleryimage/'), $fileName);
                    $filenames[] = "/uploads/Galleryimage/" . $fileName;
                }

                foreach ($filenames as $filename) {
                    Gallery::create(['gimage' => $filename]);
                }
            }
            return redirect()->route('gallery.index');
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
        $image = Gallery::find($id);

            if (!$image) {
                return redirect('/images')->with('error', 'Image not found.');
            }
            File::delete(public_path($image->gimage));
            $image->delete();
        return redirect()->route('gallery.index'); 
    }
}
