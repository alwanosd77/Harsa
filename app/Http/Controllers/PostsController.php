<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Genre;
use Cviebrock\EloquentSluggable\Services\SlugService;
use File;


class PostsController extends Controller
{

    public $backUrl = 'Posts';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('admin.pages.' . $this->backUrl . '.index', [
            'post' => $posts,
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.pages.' . $this->backUrl . '.create', [
            'genre' => $genres,
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
            'genre_id' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // pindah file gambar
        $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

        $post = new Posts();
        $post->title = $request->title;
        $post->slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
        $post->genre_id = $request->genre_id;
        $post->content = $request->content;
        $post->tags = $request->tags;
        $post->status = $request->status;
        $post->cover = $imageName;
        $post->save();
        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $genres = Genre::all();
        $post = Posts::where('slug', '=', $slug)->firstOrFail();
        return view('admin.pages.' . $this->backUrl . '.edit', [
            'genre' => $genres,
            'post' => $post,
            'backUrl' => $this->backUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'status' => 'required',
        ]);

        if ($request->cover) {
            $post = Posts::where('slug', '=', $slug)->firstOrFail();

            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $post->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $post->cover));
            }

            // pindah file gambar
            $imageName = $this->backUrl . '-cover-' . time() . '.' . $request->cover->extension();
            $request->cover->move(public_path('images/' . $this->backUrl . '/cover'), $imageName);

            $post->title = $request->title;
            $post->slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
            $post->genre_id = $request->genre_id;
            $post->content = $request->content;
            $post->tags = $request->tags;
            $post->status = $request->status;
            $post->cover = $imageName;
            $post->update();
        } else {
            $post = Posts::where('slug', '=', $slug)->firstOrFail();
            $post->title = $request->title;
            $post->slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
            $post->genre_id = $request->genre_id;
            $post->content = $request->content;
            $post->tags = $request->tags;
            $post->status = $request->status;
            $post->update();
        }

        return redirect()->route($this->backUrl)->with('post_success', $this->backUrl . ' Has Been Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Posts::findOrFail($id);
        if ($post->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/cover/' . $post->cover))) {
                File::delete(public_path('images/' . $this->backUrl . '/cover/' . $post->cover));
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
