<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    function index(){
    $tracks = Track::all();
    return view('tracks', ["tracks"=>$tracks]);
    }

    function view($id){
        $track =  Track::find($id);
        return view('trackview', compact('track'));
    }

    function destroy($id){
        $track = Track::findOrFail($id);
        $track->delete();
        return to_route('tracksindex');
    }


    function create(){
        $courses = Course::all();
        return view('trackcreate', compact('courses'));
    }


    function store(){
        $requestData = request()->all();

        $track = new track();
        $track->name = $requestData['name'];
        $track->description = $requestData['description'];
        $track->image = $requestData['image'];
        $track->save();
        return to_route('tracksindex');


    }



    function edit($id){
        $track =  Track::find($id);
        return view('trackupdate', compact('track'));
    }


    function myupdate($id){

        $track = Track::findOrFail($id);
        $requestData = request()->all();
        $track->update($requestData);
        return to_route('tracksindex');



    }
}
