<?php

namespace App\Http\Service\StudentServices;

use App\Models\Faculty;

class StudentFSelect
{
    public function getFacultyList()
    {
        $facultyList = Faculty::all();
        return $facultyList;
    }
}
