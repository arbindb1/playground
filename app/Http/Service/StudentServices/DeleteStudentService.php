<?php
namespace App\Http\Service\StudentServices;

use App\Http\Service\ServicesInterface\DeleteStudentServiceInterface;
use App\Models\Student;

class DeleteStudentService implements DeleteStudentServiceInterface{

    public function DeleteStudent($id){
        $student = Student::find($id);
        $student->delete();
    }
}
