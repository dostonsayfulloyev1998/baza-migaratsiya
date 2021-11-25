<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use \App\Models\Productssss;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::view('/student','form.student_form');
Route::view('/teacher','form.teacher_form');
Route::view('/group','form.teacher_form');
Route::view('/subject','form.subject_form');

Route::get('/dsfdsfsd',[\App\Http\Controllers\ProductssssController::class,'index']);

Route::post('/add-student',[StudentController::class,'store'])->name('add.student');

Route::get('/',function (){


    return view('admin.index');

});



