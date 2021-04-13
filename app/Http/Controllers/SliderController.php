<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $backUrl = 'Slider';
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'sliders' => $sliders,
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
            'subtitle' => 'required|max:200',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        // pindah file gambar
        $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->cover = $imageName;
        $slider->save();
        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.pages.' . $this->backUrl . '.edit', [
            'slider' => $slider,
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $slider = Slider::findOrFail($id);
        if ($request->cover) {

            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $slider->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $slider->cover));
            }

            // pindah file gambar
            $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            $slider->cover = $imageName;
            $slider->update();
        } else {
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            $slider->update();
        }

        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $slider->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $slider->cover));
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
