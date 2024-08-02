<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Http\Service\StudentServices\StudentFSelect;
use App\Http\Service\StudentServices\RedirectStudentService;
use App\Http\Service\StudentServices\StoreStudent;

class StudentController extends Controller
{
    public function __construct(
        protected StudentFSelect $facultyListService,
        protected RedirectStudentService $studentListService,
        protected StoreStudent $studentStoreService
    ) {
    }
    public function FacultySelect($sttoken)
    {
        $facultyList = $this->facultyListService->getFacultyList();
        return view('student', compact('sttoken', 'facultyList'));
    }
    public function studentRedirect(string $sttoken)
    {
        $studentList = $this->studentListService->getStudentList();
        return view('student', compact('sttoken', 'studentList'));
    }
    public function store(StudentStoreRequest $request)
    {
        $this->studentStoreService->storeStudent($request);
        return redirect()->route('student.list', ['sttoken' => 'studentList']);
    }
}
