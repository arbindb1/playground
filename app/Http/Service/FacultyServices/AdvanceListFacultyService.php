<?php
namespace app\Http\Service\FacultyServices;

use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;

class AdvanceListFacultyService implements ListFacultyServiceInterface{
    public function __construct(protected ListFacultyServiceInterface $listFacultyService)
    {

    }
public function getFacultyList()
{
    return $this->listFacultyService->getFacultyList();
}
}
