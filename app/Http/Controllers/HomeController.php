<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Media;
use App\UploadImage;
use Session;
use File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $image = 'uploads/page/';
    public function __construct()
    {        
        $this->middleware('auth');
        $this->medias = Media::all();
        if (!File::exists($this->image)) {
            mkdir($this->image, 0755, true);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function create()
    {
        $home = Home::first();
        if ( is_null($home))
        {
            return view('backend.home.create')
            ->withMedias($this->medias);
        }
        else{
            return view('backend.home.edit')
            ->withMedias($this->medias)
            ->withHome($home);
        }
    }

    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
            'heading' => 'required',
            'subheading' => 'required',
            'image' => 'required',

            'section1_title' => 'required',
            'section1_content' => 'required',
            'section1_image' => 'required',

            'section2_title' => 'required',
            'section2_content' => 'required',

            'section3_title' => 'required',
            'section3_content' => 'required',

            'section4_title' => 'required',
            'section4_content' => 'required',

            'section5_title' => 'required',
            'section5_content' => 'required',
            ]);

            $home = new Home;
            $home->heading = $request->heading;
            $home->subheading = $request->subheading;

            $home->section1_title = $request->section1_title;
            $home->section1_content = $request->section1_content;

            $home->section2_title = $request->section2_title;
            $home->section2_content = $request->section2_content;

            $home->section3_title = $request->section3_title;
            $home->section3_content = $request->section3_content;

            $home->section4_title = $request->section4_title;
            $home->section4_content = $request->section4_content;

            $home->section5_title = $request->section5_title;
            $home->section5_content = $request->section5_content;            

            $media = Media::find($request->image);
            $upload = new UploadImage;
            $banner = $upload->uploadSingle($this->image, $media->path, 1024,512);
            $home->banner = $banner;

            $media = Media::find($request->section1_image);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->image, $media->path, 1024,512);
            $home->section1_image = $thumb;

            $media = Media::find($request->section2_image);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->image, $media->path, 450,300);
            $home->section2_image = $thumb;            

            $media = Media::find($request->section3_image);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->image, $media->path, 450,300);
            $home->section3_image = $thumb;

            $media = Media::find($request->section4_image);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->image, $media->path, 450,300);
            $home->section4_image = $thumb;     
            
            $media = Media::find($request->section5_image);
            $upload = new UploadImage;
            $thumb = $upload->uploadSingle($this->image, $media->path, 450,300);
            $home->section5_image = $thumb;            

            $home->save();
            Session::flash('success', 'Home page contents updated !');
            return redirect()->route('home.create');
    }
    public function update(Request $request, Home $home)
    {
        // dd($request->all());
        $this->validate($request, [
            'heading' => 'required',
            'subheading' => 'required',
            'image' => 'sometimes',

            'section1_title' => 'required',
            'section1_content' => 'required',
            'section1_image' => 'sometimes',

            'section2_title' => 'required',
            'section2_content' => 'required',

            'section3_title' => 'required',
            'section3_content' => 'required',

            'section4_title' => 'required',
            'section4_content' => 'required',

            'section5_title' => 'required',
            'section5_content' => 'required',
            ]);

            $home->heading = $request->heading;
            $home->subheading = $request->subheading;

            $home->section1_title = $request->section1_title;
            $home->section1_content = $request->section1_content;

            $home->section2_title = $request->section2_title;
            $home->section2_content = $request->section2_content;

            $home->section3_title = $request->section3_title;
            $home->section3_content = $request->section3_content;

            $home->section4_title = $request->section4_title;
            $home->section4_content = $request->section4_content;

            $home->section5_title = $request->section5_title;
            $home->section5_content = $request->section5_content;
            
            if (!empty($request->image)) {
                $oldBanner = $home->banner;


                $media = Media::find($request->image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 1024,512);

                $home->banner = $imagePath;
                File::delete(public_path($oldBanner));
            }            

            if (!empty($request->section1_image)) {
                $oldImage = $home->section1_image;


                $media = Media::find($request->section1_image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 1024,512);

                $home->section1_image = $imagePath;
                File::delete(public_path($oldImage));
            }      

            if (!empty($request->section2_image)) {
                $oldImage = $home->section2_image;


                $media = Media::find($request->section2_image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 450,300);

                $home->section2_image = $imagePath;
                File::delete(public_path($oldImage));
            }      

            if (!empty($request->section3_image)) {
                $oldImage = $home->section3_image;


                $media = Media::find($request->section3_image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 450,300);

                $home->section3_image = $imagePath;
                File::delete(public_path($oldImage));
            }      

            if (!empty($request->section4_image)) {
                $oldImage = $home->section4_image;


                $media = Media::find($request->section4_image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 450,300);

                $home->section4_image = $imagePath;
                File::delete(public_path($oldImage));
            }      

            if (!empty($request->section5_image)) {
                $oldImage = $home->section5_image;


                $media = Media::find($request->section5_image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 450,300);

                $home->section5_image = $imagePath;
                File::delete(public_path($oldImage));
            }      
            
            
            
            $home->save();
            Session::flash('success', 'Home page contents updated !');
            return redirect()->route('home.create');
    }
}
