<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\UsrController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;

Route::get('/', [FacultyController::class, 'homepage'])->name('faculty.homepage');
Route::get('/{token}/facultyList', [FacultyController::class, 'listRedirect'])->name('faculty.list');
Route::post('/store', [FacultyController::class, 'storeFaculty'])->name('faculty.store');
Route::get('/test', function () {
    return view('test');
})->name('test.test');
Route::get('/{sttoken}/studentList', [StudentController::class, 'studentRedirect'])->name('student.list');
Route::post('/stdstore', [StudentController::class, 'store'])->name('student.store');
Route::get('{sttoken}/select-faculty', [StudentController::class, 'FacultySelect'])->name('student.select');
Route::resource('student', StudentController::class);
Route::delete('{id}/deleteStudent',[StudentController::class, 'DeleteStudent'])->name('student.delete');
Route::delete('{id}/deleteFaculty',[FacultyController::class, 'DeleteFaculty'])->name('faculty.delete');

