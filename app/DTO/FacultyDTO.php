<?php
namespace App\DTO;

use App\Http\Requests\FacultyStoreRequest;
use Spatie\DataTransferObject\DataTransferObject;

class FacultyDTO extends DataTransferObject{

    public function __construct(public FacultyStoreRequest $faculty){

    }
public function fromRequest()
{

    return $this->faculty->validated();
}
}
