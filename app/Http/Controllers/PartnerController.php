<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $backUrl = 'Partner';
    public function index()
    {
        $partner = Partner::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'partner' => $partner,
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
            'name' => 'required',
            'url' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // pindah file gambar
        $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->url = $request->url;
        $partner->cover = $imageName;
        $partner->save();
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
        $partner = Partner::findOrFail($id);
        return view('admin.pages.' . $this->backUrl . '.edit', [
            'partner' => $partner,
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
            'name' => 'required',
            'url' => 'required',
        ]);

        $partner = Partner::findOrFail($id);
        if ($request->cover) {

            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $partner->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $partner->cover));
            }

            // pindah file gambar
            $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

            $partner->name = $request->name;
            $partner->url = $request->url;
            $partner->cover = $imageName;
            $partner->update();
        } else {
            $partner->name = $request->name;
            $partner->url = $request->url;
            $partner->update();
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
        $partner = Partner::findOrFail($id);

        if ($partner->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $partner->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $partner->cover));
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
