<?php

namespace App\Http\Service\ServicesInterface;

use App\Models\Student;

interface DeleteStudentServiceInterface
{
    public function DeleteStudent($id);
}
