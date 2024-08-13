<?php

namespace App\Http\Controllers;

use App\DTO\StudentDTO;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Service\ServicesInterface\DeleteStudentServiceInterface;
use App\Http\Service\ServicesInterface\RedirectStudentServiceInterface;
use App\Http\Service\ServicesInterface\StoreStudentInterface;
use App\Http\Service\ServicesInterface\StudentFSelectInterface;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct(
        protected StudentFSelectInterface $facultyListService,
        protected RedirectStudentServiceInterface $studentListService,
        protected StoreStudentInterface $studentStoreService,
        protected DeleteStudentServiceInterface $deleteStudentService
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
        $studentDTO = new StudentDTO($request);
        $this->studentStoreService->storeStudent($studentDTO);
        return redirect()->route('student.list', ['sttoken' => 'studentList']);
    }
    public function DeleteStudent($id){
        $this->deleteStudentService->deleteStudent($id);
        return redirect()->route('student.list',['sttoken'=>'studentList']);
    }
}
