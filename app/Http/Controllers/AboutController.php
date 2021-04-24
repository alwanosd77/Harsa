<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $backUrl = 'About';
    public function index()
    {
        $about = About::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'about' => $about,
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
            'title' => 'required',
            'shortText' => 'required',
            'content' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // pindah file gambar
        $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

        $about = new About();
        $about->title = $request->title;
        $about->slug = SlugService::createSlug(About::class, 'slug', $request->title);
        $about->content = $request->content;
        $about->shortText = $request->shortText;
        $about->cover = $imageName;
        $about->save();
        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $about = About::where('slug', '=', $slug)->firstOrFail();
        return view('admin.pages.' . $this->backUrl . '.edit', [
            'about' => $about,
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'shortText' => 'required',
            'content' => 'required',
        ]);

        $about = About::where('slug', '=', $slug)->firstOrFail();
        if ($request->cover) {

            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $project->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $project->cover));
            }

            // pindah file gambar
            $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

            $about->title = $request->title;
            $about->slug = SlugService::createSlug(About::class, 'slug', $request->title);
            $about->content = $request->content;
            $about->shortText = $request->shortText;
            $about->cover = $imageName;
            $about->update();
        } else {
            $about->title = $request->title;
            $about->slug = SlugService::createSlug(About::class, 'slug', $request->title);
            $about->content = $request->content;
            $about->shortText = $request->shortText;
            $about->update();
        }

        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
