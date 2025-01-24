<?php

namespace App\Http\Controllers;
use App\Models\Track;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        
        
        // $students=DB::table('students')->get();
        // dump($students);
        $students = Student::all();
        return view('students', ["students"=>$students]);
    }


    function view($id){
        $student =  Student::find($id);
        return view('studentview', compact('student'));
    }

    function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return to_route('Studentsindex');
    }


    function create(){
        $tracks=Track::all();
        return view('studentcreate', compact('tracks'));
    }


    function store(){

        $requestData = request()->all();

        $student = new Student();
        $student-> name = $requestData['name'];
        $student-> email = $requestData['email'];
        $student-> gender = $requestData['gender'];
        $student-> image = $requestData['image'];
        $student-> track_id = $requestData['track_id'];
        $student->save();
        return to_route('Studentsindex');


    }



    function edit($id){
        $student =  Student::find($id);
        return view('studentupdate', compact('student'));
    }


    function myupdate($id){

        $student = Student::findOrFail($id);
        $requestData = request()->all();
        $student->update($requestData);
        return to_route('Studentsindex');



    }
}
