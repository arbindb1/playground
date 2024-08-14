<?php
namespace App\Http\Service\TrashServices;

use App\Http\Service\ServicesInterface\TrashListServiceInterface;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class TrashListService implements TrashListServiceInterface{
public function getTrash(){
$softDeletedStudents = Student::onlyTrashed()
->leftJoin('faculties','students.faculty', '=' , 'faculties.id')
->select(
    'students.id',
    'students.name as student_name',
    'faculties.name as faculty_name',
    'students.deleted_at as student_delete',
    DB::raw("'Student' as type"))->get();
$softDeletedFaculty = Faculty::onlyTrashed()->select('id', 'faculties.name as faculty_name',DB::raw("'' as faculty"), 'deleted_at as faculty_delete', DB::raw("'Faculty' as type"))->get();

return $softDeletedStudents->merge($softDeletedFaculty);

}
}
