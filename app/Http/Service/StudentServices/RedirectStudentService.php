<?php

namespace App\Http\Service\StudentServices;

use App\Models\Student;

class RedirectStudentService
{
    public function getStudentList()
    {
        $studentList = Student::with('fc')->get();
        return $studentList;
    }
}
