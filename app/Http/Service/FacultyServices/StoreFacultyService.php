<?php

namespace App\Http\Service\FacultyServices;

use App\http\Service\ServicesInterface\StoreFacultyServiceInterface;
use App\Models\Faculty;


class StoreFacultyService implements StoreFacultyServiceInterface
{
    public function storeFaculty($request)
    {
        $data = $request->validated();
        Faculty::create($data);
    }
}
