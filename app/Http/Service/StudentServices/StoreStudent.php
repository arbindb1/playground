<?php

namespace App\Http\Service\StudentServices;

use App\Http\Service\ServicesInterface\StoreStudentInterface;
use App\Models\Faculty;
use App\Models\Student;

class StoreStudent implements StoreStudentInterface
{
    public function storeStudent($rawdata)
    {
        $data = $rawdata->fromRequest();
        $fid = Faculty::where('name', $data['faculty'])->get();
        $data['faculty'] = (int)$fid[0]->id;
        Student::create($data);
    }
}
