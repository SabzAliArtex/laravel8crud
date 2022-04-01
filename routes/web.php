<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('student');
});
Route::get('display', function () {
    return view('display');
});
 // Route::get('student', [StudentController::class, 'create']);
 Route::post('student', [StudentController::class, 'store']);
Route::get('student', [StudentController::class, 'index']);
Route::get('editstudent/{id}', [StudentController::class, 'edit']);
 Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete/{id}',[StudentController::class,'delete']);
