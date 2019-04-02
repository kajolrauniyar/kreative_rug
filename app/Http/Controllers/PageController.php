<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use App\Media;
use App\UploadImage;
use File;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $image = 'uploads/page/';

    public function __construct()
    {
        $this->medias = Media::all();
        if (!File::exists($this->image)) {
            mkdir($this->image, 0755, true);
        }
    }
    public function index()
    {
        $pages=Page::all();
        return view('backend.page.index')
        ->withPages($pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.create')        
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
            'title' => 'required',
            'sectionTitle.*' => 'required',
            'sectionContent.*' => 'required',
            'image' => 'required',
            'mtitle' => 'required',
            'description' => 'required',
            ]);

            $page = new Page;
            $page->title = $request->title;
            // $page->slug = Str::slug($request->title, '-');
            $page->status = 0;
            $page->description = $request->description;
            $page->mtitle = $request->mtitle;

            $media = Media::find($request->image);
            $upload = new UploadImage;
            $imagePath = $upload->uploadSingle($this->image, $media->path, 1024,512);
            $page->banner = $imagePath;

            $page->save();
            
            $contents = Content::where('page_id', $page->id)->get();            
            for ($i=0; $i < count($request->sectionTitle) ; $i++) { 
                foreach ($contents as $db) {
                    if($db->id == $request->contentID[$i]){
                        $content = Content::find($request->contentID[$i]);
                        $content->sectionTitle = $request->sectionTitle[$i];
                        $content->sectionContent = $request->sectionContent[$i];
                        $content->save();
                    }
                    else{
                        $new = new Content;
                        $new->page_id = $page->id;
                        $new->sectionTitle = $request->sectionTitle[$i];
                        $new->sectionContent = $request->sectionContent[$i];
                        $new->save();
                    }
                }
            }

            Session::flash('success', 'Page added sucessfully !');
            return redirect()->route('page.show', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('backend.page.show')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.page.edit')
        ->withPage($page)
        ->withMedias($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            'title' => 'required',
            'sectionTitle.*' => 'required',
            'sectionContent.*' => 'required',
            'image' => 'required',
            'mtitle' => 'required',
            'description' => 'required',
            ]);

            $page->title = $request->title;
            $page->slug = Str::slug($request->title, '-');
            $page->description = $request->description;
            $page->mtitle = $request->mtitle;

            if (!empty($request->image)) {
                $oldPath = $page->path;


                $media = Media::find($request->image);
                $upload = new UploadImage;
                $imagePath = $upload->uploadSingle($this->image, $media->path, 1024,512);

                $page->banner = $imagePath;

                File::delete(public_path($page));
            }

            $page->save();

            for ($i=0; $i < count($request->sectionTitle) ; $i++) { 
                $content = Content::find($request->sectionTitle[$i]);
                if(!empty($content)){
                    $content->page_id = $page->id;
                    $content->sectionTitle = $request->sectionTitle[$i];
                    $content->sectionContent = $request->sectionTitle[$i];
                    $content->save();
                }
                else{
                    $content = new Content;
                    $content->page_id = $page->id;
                    $content->sectionTitle = $request->sectionTitle[$i];
                    $content->sectionContent = $request->sectionTitle[$i];
                    $content->save();
                }
                // Content::firstOrCreate([
                //     'page_id' => $page->id,
                //     'sectionTitle' => $request->sectionTitle[$i],
                //     'sectionContent' => $request->sectionContent[$i]
                // ]);
            }


            Session::flash('success', 'Page updated sucessfully !');
            return redirect()->route('page.show', $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        File::delete(public_path($page->banner));
        $page->delete();

        Session::flash('success', 'Page deleted sucessfully !');
        return redirect()
        ->route('page.index');    
    }

    public function publish($id)
    {
        $page = Page::find($id);
        $page->status = 1;
        $page->save();
        Session::flash('success', 'Page set as published!');
        return redirect()
        ->route('page.index');
    }

    public function unpublish($id)
    {
        $page = Page::find($id);
        $page->status = 0;
        $page->save();
        Session::flash('success', 'Page set as published!');
        return redirect()
        ->route('page.index');
    }
}
