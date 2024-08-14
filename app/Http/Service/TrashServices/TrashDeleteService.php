<?php
namespace App\Http\Service\TrashServices;

use App\Http\Service\ServicesInterface\TrashDeleteServiceInterface;
use App\Models\Faculty;
use App\Models\Student;

class TrashDeleteService implements TrashDeleteServiceInterface{
    public function deleteTrash($id,$type){
        $id = (int)$id;
        if($type == "Student"){
            $record = Student::withTrashed()->find($id);
        }
        else if($type == "Faculty"){
            $record = Faculty::withTrashed()->find($id);
        }
        $record->forceDelete();
    }
}
