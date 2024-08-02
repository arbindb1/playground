<?php


namespace App\Http\Service\FacultyServices;

use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;
use App\Models\Faculty;

class ListFacultyService implements ListFacultyServiceInterface
{
public function getFacultyList(){
    return Faculty::all();
}
}
