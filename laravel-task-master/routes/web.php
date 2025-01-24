<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//students routing
Route::get('/students/studentcreate', [StudentController::class,'create'])->name('studentcreate');
Route::post('/students/store',[StudentController::class,'store'])->name('studentstore');
Route::get('/students',[StudentController::class,'index'])->name('Studentsindex');
Route::get('/students/{id}', [StudentController::class,'view'])->name('Studentsview');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('Studentsdelete');
Route::get('/students/{id}/edit', [StudentController::class,'edit'])->name('studentedit');
Route::patch('/students/{id}/update', [StudentController::class,'myupdate'])->name('studentupdate');

//tracks routing
Route::get('/tracks/trackcreate', [TrackController::class,'create'])->name('trackcreate');
Route::post('/tracks/store',[TrackController::class,'store'])->name('trackstore');
Route::get('/tracks',[TrackController::class,'index'])->name(name: 'tracksindex');
Route::get('/tracks/{id}',[TrackController::class,'view'])->name(name: 'tracksview');
Route::delete('/tracks/{id}', [TrackController::class, 'destroy'])->name('tracksdelete');
Route::get('/tracks/{id}/edit', [TrackController::class,'edit'])->name('trackedit');
Route::patch('/tracks/{id}/update', [TrackController::class,'myupdate'])->name('trackupdate');


//courses routing
Route::resource('courses', CourseController::class);



