<?php

namespace App\Http\Controllers;

use App\Team;
use App\Media;
use App\UploadImage;
use Session;
use File;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TeamController extends Controller
{
    private $path = "uploads/avatar/";    
    public function __construct()
    {
        if (!is_dir($this->path)) {
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
        $teams = Team::orderBy('position','ASC')->get();
        return view('backend.team.index')->withTeams($teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Media::all();
        return view('backend.team.create')
        ->withImages($images);
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
            $this->validate($request, [
                'name' => 'required|max:255',
                'designation' => 'required',
                'description' => 'required',
            ]);
    
            $team = new Team;
            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->description = strip_tags($request->description);
    
    
            $media = Media::find($request->avatar);
            $upload = new UploadImage;
            $bannerPath = $upload->uploadSingle($this->path, $media->path, 400,300);
            $team->avatar =  $bannerPath;
            $team->save();
            Session::flash('success', 'Team created sucessfully !');
        } catch (QueryException $e) {
            return $e->getMessage();
            DB::rollback();
            Session::flash('success', $e->getMessage());
            }
            return redirect()->route('team.show',$team->id);  
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backend.team.show')->withTeam($team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $images = Media::all();

        return view('backend.team.edit')->withTeam($team)
        ->withImages($images); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        // dd($request->all());
        try {
            $this->validate($request, [
                'name' => 'required|max:255',
                'designation' => 'required',
                'description' => 'required',
            ]);
            
    
            $team->name = $request->name;
            $team->designation = $request->designation;
            $team->description = strip_tags($request->description);
    
            if (isset($request->avatar)) {
                $media = Media::find($request->avatar);
                $upload = new UploadImage;
                $bannerPath = $upload->uploadSingle($this->path, $media->path, 400,300);
                $team->avatar =  $bannerPath;
            }
    
            $team->save();
            Session::flash('success', 'Team created sucessfully !');
        } catch (QueryException $e) {
            return $e->getMessage();
            DB::rollback();
            Session::flash('success', $e->getMessage());
            // Session::flash('danger', 'Failed to create new page.');
        }
        return redirect()->route('team.show', $team->id);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        File::delete(public_path($team->avatar));
        $team->delete();
        Session::flash('success', 'Deleted sucessfully !');
        return redirect()->route('team.index');
    }

    public function updateOrder(Request $request)
    {
        $teams = Team::orderBy('position','ASC')->get();
        $itemID = Input::get('itemID');
        $itemIndex = Input::get('itemIndex');

        foreach ($teams as $team) {
            DB::table('teams')
            ->where('id', $itemID)
            ->update(['position' => $itemIndex+1]);
        }
        return response()->json($request->itemId);
    }
}
