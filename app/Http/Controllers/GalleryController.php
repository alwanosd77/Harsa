<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $backUrl = 'Gallery';
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'galleries' => $galleries,
            'backUrl' => $this->backUrl
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.' . $this->backUrl . '.create', [
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // pindah file gambar
        $file = $request->file('file');
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('images/' . $this->backUrl), $fileName);
        $gallery = new Gallery();
        $gallery->cover = $fileName;
        $gallery->save();

        return response()->json(['success' => $fileName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/' . $gallery->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/' . $gallery->cover));
            } else {
            }
            return response()->json([
                'success' => $this->backUrl . ' Deleted',
            ]);
        }
        return response()->json([
            'error' => $this->backUrl . ' Not Found',
        ]);
    }
}
