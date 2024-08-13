<?php

namespace App\Http\Controllers;

use App\DTO\FacultyDTO;
use Illuminate\Http\Request;
use App\Http\Requests\FacultyStoreRequest;
use App\Http\Service\ServicesInterface\ListFacultyServiceInterface;
use App\Http\Service\ServicesInterface\StoreFacultyServiceInterface;
use App\Http\Service\ServicesInterface\RedirectFacultyServiceInterface;

class FacultyController extends Controller

{


    public function __construct(
        protected ListFacultyServiceInterface $listFacultyService,
        protected RedirectFacultyServiceInterface $redirectFacultyService,
        protected StoreFacultyServiceInterface $storeFacultyService
    ) {
    }
    public function homepage()
    {
        return view('homepage');
    }
    public function listFaculties()
    {
        $listAll = $this->listFacultyService->getFacultyList();
        return $listAll;
    }
    public function listRedirect(string $token, Request $request)
    {

        $listAll = $this->listFaculties();
        $filterData = $this->redirectFacultyService->getFilterData($request);
        $facultyData = $this->redirectFacultyService->getFacultyData();
        return view('faculty', compact('facultyData', 'filterData', 'token', 'listAll'));
    }
    public function storeFaculty(FacultyStoreRequest $validate)
    {
        $facultyDTO= new FacultyDTO($validate);
        $this->storeFacultyService->storeFaculty($facultyDTO);
        return redirect()->route('faculty.list', ['token' => 'facultyList']);
    }
}
