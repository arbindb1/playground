<?php
namespace App\Http\Service\StudentServices;

use App\Http\Service\ServicesInterface\DeleteStudentServiceInterface;
use App\Models\Student;

class DeleteStudentService implements DeleteStudentServiceInterface{

    public function DeleteStudent($id){
        Student::destroy($id);
    }
}
