<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Track;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Course::orderBy('created_at', 'asc')-> paginate(5);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tracks=Track::all();
        return view('courses.create', compact('tracks'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'name' => 'required|unique:courses|min:2',
            'description' => 'required|min:5|max:30',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048'
        ],[
            'name.required' => "you should enter a name",
            'name.unique' => "this course name was taken",
            'description.required' => "enter a description!"
        ]);



        if ($request->hasFile('logo')) {
        $logoName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('logos'), $logoName);
        $requestData['logo'] = $logoName;
    }

        $courses = Course::create($requestData);
        $courses->track()->attach($request->post('track'));
        return to_route('courses.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
        return view('courses.show', compact('course'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
        return view('courses.update', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
        $requestData = request()->all();
        $course->update($requestData);
        return to_route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return to_route('courses.index');
    }
}
