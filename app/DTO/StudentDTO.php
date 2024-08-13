<?php
namespace App\DTO;

use App\Http\Requests\StudentStoreRequest;
use App\Providers\StudentServiceProvider;
use Spatie\DataTransferObject\DataTransferObject;

class StudentDTO extends DataTransferObject{

    public function __construct(public StudentStoreRequest $student){

    }
public function fromRequest()
{

    return $this->student->validated();
}
}
