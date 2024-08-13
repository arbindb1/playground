<?php
namespace App\Http\Service\FacultyServices;

use App\Http\Service\ServicesInterface\DeleteFacultyServiceInterface;
use App\Models\Faculty;

class DeleteFacultyService implements DeleteFacultyServiceInterface{
    public function deleteFaculty($rawData){
        $faculty = Faculty::find($rawData);
        $faculty->delete();
    }
}
