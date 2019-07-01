<?php

namespace App\Http\Controllers;

use App\Category;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $path = "uploads/category/";
    private $thumb = "uploads/category/thumb/";
    private $nav = "uploads/category/nav/";

    function __construct()
    {
        $this->medias = Media::all();
        if (!File::exists($this->path) || !File::exists($this->thumb) || !File::exists($this->nav)) {
            mkdir($this->path, 0755, true);
            mkdir($this->thumb, 0755, true);;
            mkdir($this->nav, 0755, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();        
        return view('backend.category.index')
        ->withCategories($categories)
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
                'name' => 'required|max:255',
                'featured' => 'required'
            ));
            $categories = new Category;
            $categories->name = $request->name;
            $categories->description = $request->description;
            
            $media = Media::find($request->featured);
            $uploadImage = new UploadImage;
            $path = $uploadImage->uploadSingle($this->path,$media->path,1024,512);
            $thumb = $uploadImage->uploadSingle($this->thumb,$media->path,320,480);
            $nav = $UploadImage->cropUpload($this->nav,$media->path,320,480);
            $categories->path = $path;
            $categories->thumb = $thumb;
            $categories->nav = $nav;

            $categories->save();
        } catch (QueryException $e) {
            DB::rollback();
            Session::flash('success', $e->getMessage());
        }
        Session::flash('success', 'New item added sucessfully.');
        return redirect()->route('product-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit')
        ->withCategory($category)
        ->withImages($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
            'featured' => 'sometimes'
        ]);
        
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        if (!empty($request->featured)) {
            //fetch old image path
            $oldPath =$category->path;
            $oldThumb =$category->thumb;
            $oldNav =$category->nav;

            //assign new image path to objects
            $media = Media::find($request->featured);
            $UploadImage = new UploadImage;
            $path = $UploadImage->uploadSingle($this->path,$media->path,1024,512);
            $thumb = $UploadImage->uploadSingle($this->thumb,$media->path,320,480);
            $nav = $UploadImage->cropUpload($this->nav,$media->path,320,480);
           $category->path = $path;
           $category->thumb = $thumb;
           $category->nav = $nav;

            //delete old image
            File::delete(public_path($oldPath));
            File::delete(public_path($oldThumb));
            File::delete(public_path($oldNav));
        }
        $category->save();

        return redirect()->route('product-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        File::delete(public_path($category->path));
        File::delete(public_path($category->thumb));
        File::delete(public_path($category->nav));
        $category->delete();
        return response()->json($category);
    }
}
