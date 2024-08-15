<?php
namespace App\Http\Service\TrashServices;

use App\Http\Service\ServicesInterface\TrashRestoreServiceInterface;
use App\Models\Faculty;
use App\Models\Student;

class TrashRestoreService implements TrashRestoreServiceInterface{
    public function restoreTrash($id,$type){
        if($type == "Student"){
            $record = Student::withTrashed()->find($id);
        }
        else if($type == "Faculty"){
            $record = Faculty::withTrashed()->find($id);
        }
        $record->restore();
        if($record){
            return redirect()->back()->with("success",$type." Restored Successfully");
        }
        else{
            return redirect()->back()->with("error",$type." not found or cannot be restored.");
        }
    }
}
