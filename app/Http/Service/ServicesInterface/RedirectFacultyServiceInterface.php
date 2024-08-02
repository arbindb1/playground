<?php
namespace App\http\Service\ServicesInterface;

interface RedirectFacultyServiceInterface{
    public function getFilterData($request);
    public function getFacultyData();
}
