<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $backUrl = 'General';
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = 1;
        $general = General::findOrFail($id);
        return view('admin.pages.' . $this->backUrl . '.edit', [
            'general' => $general,
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = 1;
        $general = General::findOrFail($id);

        $general->phone =  $request->phone;
        $general->address =  $request->address;
        $general->fax =  $request->fax;
        $general->facebook =  $request->facebook;
        $general->twitter =  $request->twitter;
        $general->instagram =  $request->instagram;
        $general->youtube =  $request->youtube;
        $general->linkedin =  $request->linkedin;
        $general->email =  $request->email;
        $general->quote =  $request->quote;
        $general->update();

        return redirect()->route($this->backUrl . '.edit')->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
