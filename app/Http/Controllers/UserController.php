<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Media;
use App\UploadImage;
use Session;
use File;
use Image;
class UserController extends Controller
{
    private $path = "uploads/users/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->medias = Media::all();
        if (!File::exists($this->path)) {
            mkdir($this->path, 0755, true);
        }
    }
    public function index()
    {
        $users = User::all();
        return view('backend.user.index')->withUsers($users);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($id);
        return view('backend.user.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.user.edit')->withUser($user)->withImages($this->medias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:244',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;


        if (!empty($request->image)) {
            //fetch old image path
            $oldPath =$user->path;

            //assign new image path to objects
            $media = Media::find($request->image);
            $UploadImage = new UploadImage;
            $path = $UploadImage->uploadSingle($this->path,$media->path,250,250);
            $user->path = $path;

            //delete old image
            File::delete(public_path($oldPath));
        }
        $user->save();
        Session::flash('success', 'Password Updated successfully.');
        return redirect()->route('user.show', $user->id);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
