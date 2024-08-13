<?php
namespace App\Http\Service\ServicesInterface;


interface RedirectFacultyServiceInterface{
    public function getFilterData($request);
    public function getFacultyData();
}
