<?php

namespace App\Http\Controllers;

use App\Process;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Image;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    private $path = "uploads/category/";
    function __construct()
    {
        $this->medias = Media::all();
        if (!File::exists($this->path)) {
            mkdir($this->path, 0755, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = Process::all();
        return view('backend.process.index')
        ->withProcesses($processes)
        ->withImages($this->medias);
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
        try {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'featured' => 'required'
            ));
            $process = new Process;
            $process->title = $request->title;
            $process->description = $request->description;
            
            $media = Media::find($request->featured);
            $uploadImage = new UploadImage;
            $path = $uploadImage->uploadSingle($this->path,$media->path,800,600);
            $process->path = $path;
            $process->save();
        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'New item added sucessfully.');
        return redirect()->route('process.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        return view('backend.process.edit')->withProcess($process);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        $this->validate($request, [
            'title' => 'required|max:244',
            'featured' => 'sometimes'
        ]);
        
        $process = Category::find($request->id);
        $process->title = $request->title;
        $process->description = $request->description;

        if (!empty($request->featured)) {
            $oldPath = $process->path;

            //assign new image path to objects
            $media = Media::find($request->featured);
            $UploadImage = new UploadImage;
            $path = $UploadImage->uploadSingle($this->path,$media->path,800,600);
           $category->path = $path;

            //delete old image
            File::delete(public_path($oldPath));
        }
        $category->save();

        return redirect()->route('process.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $process = Process::findOrFail($id);
        File::delete(public_path($process->path));
        $process->delete();
        return response()->json($process);
    }
}
