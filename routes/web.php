<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrashController;

Route::get('/', [FacultyController::class, 'homepage'])->name('faculty.homepage');
Route::get('/{token}/facultyList', [FacultyController::class, 'listRedirect'])->name('faculty.list');
Route::post('/store', [FacultyController::class, 'storeFaculty'])->name('faculty.store');
Route::delete('{id}/deleteFaculty', [FacultyController::class, 'DeleteFaculty'])->name('faculty.delete');
Route::get('/test', function () {return view('test');})->name('test.test');
Route::get('/{sttoken}/studentList', [StudentController::class, 'studentRedirect'])->name('student.list');
Route::post('/stdstore', [StudentController::class, 'store'])->name('student.store');
Route::get('{sttoken}/select-faculty', [StudentController::class, 'FacultySelect'])->name('student.select');
Route::resource('student', StudentController::class);
Route::delete('{id}/deleteStudent', [StudentController::class, 'DeleteStudent'])->name('student.delete');
Route::get('/trash', [TrashController::class, 'trash'])->name('trash');
Route::delete('{id}/{type}/deleteTrash', [TrashController::class, 'deleteTrash'])->name('trash.delete');
Route::post('{id}/{type}/restoreTrash',[TrashController::class, 'restoreTrash'])->name('trash.restore');
