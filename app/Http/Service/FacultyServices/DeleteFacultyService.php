<?php
namespace App\Http\Service\FacultyServices;

use App\Http\Service\ServicesInterface\DeleteFacultyServiceInterface;
use App\Models\Faculty;
use App\Models\Student;

class DeleteFacultyService implements DeleteFacultyServiceInterface{
    public function deleteFaculty($rawData){
        $studentsWithFaculty = Student::where('faculty', $rawData)->exists();

        if ($studentsWithFaculty) {
            throw new \Exception('Cannot delete faculty because there are students associated with it.');
        }
        $faculty = Faculty::find($rawData);

        if ($faculty) {
            $faculty->delete();
        } else {
            throw new \Exception('Faculty not found.');
        }
    }
}
