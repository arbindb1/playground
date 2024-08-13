<?php

namespace App\Http\Service\StudentServices;

use App\Http\Service\ServicesInterface\RedirectStudentServiceInterface;
use App\Models\Student;

class RedirectStudentService implements RedirectStudentServiceInterface
{
    public function getStudentList()
    {
        $studentList = Student::with('fc')->get();
        return $studentList;
    }
}
