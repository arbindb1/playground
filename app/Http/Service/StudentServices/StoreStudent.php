<?php

namespace App\Http\Service\StudentServices;

use App\Models\Faculty;
use App\Models\Student;

class StoreStudent
{
    public function storeStudent($request)
    {
        $data = $request->validated();
        $fid = Faculty::where('name', $data['faculty'])->get();
        $data['faculty'] = (int)$fid[0]->id;
        Student::create($data);
    }
}
