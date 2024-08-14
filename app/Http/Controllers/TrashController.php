<?php

namespace App\Http\Controllers;

use App\Http\Service\ServicesInterface\TrashDeleteServiceInterface;
use App\Http\Service\ServicesInterface\TrashListServiceInterface;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __construct(protected TrashListServiceInterface $trashListService, protected TrashDeleteServiceInterface $trashDeleteService)
    {

    }
public function Trash(){
    // Fetch all soft-deleted records
$trash = $this->trashListService->getTrash();
    return view('trash',compact('trash'));
}
public function deleteTrash($id,$type){
$this->trashDeleteService->deleteTrash($id,$type);
return redirect()->route('trash');
}
}
