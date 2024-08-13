<?php

namespace App\Http\Service\FacultyServices;

use App\Http\Service\ServicesInterface\RedirectFacultyServiceInterface;
use App\Models\Faculty;

class RedirectFacultyService implements RedirectFacultyServiceInterface
{

    protected $filterData;
    // TODO:: DTO or DATA Spatie package
    public function getFilterData($request)
    {

        $this->filterData = $request->input('filter-faculty');
        return $this->filterData;
    }
    public function getFacultyData()
    {
        if ($this->filterData) {

            $facultyData = Faculty::where('name', $this->filterData)->get();
            return $facultyData;
        } else {
            $facultyData = Faculty::all();
            return $facultyData;

        }
    }
}
