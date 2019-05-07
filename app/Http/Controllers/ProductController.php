<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Material;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $image = 'uploads/product/';
    private $thumb = 'uploads/product/thumb/';

    public function __construct()
    {
        $this->medias = Media::all();
        $this->materials = Material::all();
        $this->categories = Category::all();
        if (!File::exists($this->image) || !File::exists($this->thumb)) {
            mkdir($this->image, 0755, true);
            mkdir($this->thumb, 0755, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create')
        ->withCategories($this->categories)
        ->withMaterials($this->materials)
        ->withMedias($this->medias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'size' => 'sometimes',
            'overview' => 'required',
            'note' => 'sometimes',
            'mtitle' => 'required',
            'description' => 'required',
            'status' => 'required',
            'category' => 'required',
            'image' => 'required',
            'materials' => 'required|array|min:1'
            ]);

            $product = new Product;
            $product->name = $request->name;            
            if(!empty($request->size)){
                $product->size = $request->size;
            }
            $product->category_id = $request->category;
            $product->status = $request->status;
            $product->description = $request->overview;
            $product->note = $request->note;
            $product->meta_description = $request->description;
            $product->mtitle = $request->mtitle;

            $media = Media::find($request->image);
            $upload = new UploadImage;
            $imagePath = $upload->uploadSingle($this->image, $media->path, 480,640);
            $thumbPath = $upload->uploadSingle($this->thumb, $media->path, 320,480);

            $product->path = $imagePath;
            $product->thumb = $thumbPath;

            $product->save();
            if (isset($request->materials)) {
                $product->material()->sync($request->materials, false);
            }

            Session::flash('success', 'Product added sucessfully !');
            return redirect()->route('product.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.product.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit')
        ->withProduct($product)
        ->withCategories($this->categories)
        ->withMaterials($this->materials)
        ->withMedias($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'size' => 'sometimes',
            'overview' => 'required',
            'note' => 'sometimes',
            'mtitle' => 'required',
            'description' => 'required',
            'status' => 'required',
            'category' => 'required',
            'image' => 'sometimes',
            'materials' => 'sometimes'
            ]);

            $product->name = $request->name;            
            if(!empty($request->size)){
                $product->size = $request->size;
            }
            $product->category_id = $request->category;
            $product->description = $request->overview;
            $product->note = $request->note;
            $product->status = $request->status;
            $product->meta_description = $request->description;
            $product->mtitle = $request->mtitle;

            if (!empty($request->image)) {
                $oldPath = $product->path;
                $oldThumb = $product->thumb;


                $media = Media::find($request->image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 480,640);
                $thumbPath = $upload->uploadSingle($this->thumb, $media->path, 320,480);

                $product->path = $imagePath;
                $product->thumb = $thumbPath;

                File::delete(public_path($oldPath));
                File::delete(public_path($oldThumb));
            }
            $product->save();
            if (isset($request->materials)) {
                $product->material()->sync($request->materials);
            }
            
            Session::flash('success', 'Product added sucessfully !');
            return redirect()->route('product.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        File::delete(public_path($product->path));
        File::delete(public_path($product->thumb));

        if ($test = $product->material()->count() != null) {
            $product->material()->detach();
        }
        
        $product->delete();

        Session::flash('success', 'Product deleted sucessfully !');
        return redirect()
        ->route('product.index');
    }

    public function publish($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        Session::flash('success', 'Product published!');
        return redirect()
        ->route('product.index');
    }

    public function unpublish($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        Session::flash('success', 'Product published !');
        return redirect()
        ->route('product.index');
    }

    public function setAsfeatured($id){
        $product = Product::find($id);
        $product->featured = 1;
        $product->save();

        Session::flash('success', 'Product set as featured !');
        return redirect()
        ->route('product.index');
    }

    public function removeAsfeatured($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();

        Session::flash('success', 'Product removed from featured !');
        return redirect()
        ->route('product.index');

    } 
}
