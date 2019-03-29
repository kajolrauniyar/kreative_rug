<?php

namespace App\Http\Controllers;

use App\Media;
use Session;
use File;
use Image;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $path = "uploads/media/";
    private $thumb = "uploads/media/thumb/";
    public function __construct()
    {
        if (!is_dir($this->path) && !is_dir($this->thumb)) {
            mkdir($this->path, 0755, true);
            mkdir($this->thumb, 0755, true);
        }
    }

    public function index()
    {
        $medias = Media::all();
        return view('backend.media.index')->withMedias($medias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new Media;

        $file = $request->file('photo');
        $filename = md5( time().$file->getClientOriginalName()).'-'.$file->getClientOriginalName();
        $location = $this->path.$filename;    
        $thumb = $this->thumb.$filename;
        Image::make($file)->save($location);
        Image::make($file)->resize(200,300,function ($constraint) {
			$constraint->aspectRatio();
		})->save($thumb);
        $media->path = $location;
        $media->thumb = $thumb;
        $media->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $this->validate($request, [
            'name' => 'required|max:244'
        ]);
        $media = Media::find($request->id);
        $media->name = $request->name;

        $media->save();

        return response()->json($media);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        File::delete(public_path($media->path));
        File::delete(public_path($media->thumb));
        $media->delete();
        return response()->json($media);
    }

}
