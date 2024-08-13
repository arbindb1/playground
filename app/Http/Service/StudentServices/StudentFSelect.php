<?php

namespace App\Http\Service\StudentServices;

use App\Http\Service\ServicesInterface\StudentFSelectInterface;
use App\Models\Faculty;

class StudentFSelect implements StudentFSelectInterface
{
    public function getFacultyList()
    {
        $facultyList = Faculty::all();
        return $facultyList;
    }
}
