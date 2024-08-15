<?php

namespace App\Http\Controllers;

use App\Http\Service\ServicesInterface\TrashDeleteServiceInterface;
use App\Http\Service\ServicesInterface\TrashListServiceInterface;
use App\Http\Service\ServicesInterface\TrashRestoreServiceInterface;

class TrashController extends Controller
{
    public function __construct(protected TrashListServiceInterface $trashListService, protected TrashDeleteServiceInterface $trashDeleteService,protected TrashRestoreServiceInterface $trashRestoreService) {}
    public function Trash()
    {
        // Fetch all soft-deleted records
        $trash = $this->trashListService->getTrash();
        return view('trash', compact('trash'));
    }
    public function deleteTrash($id, $type)
    {
        $this->trashDeleteService->deleteTrash($id, $type);
        return redirect()->route('trash');
    }
    public function restoreTrash($id,$type){
        $this->trashRestoreService->restoreTrash($id,$type);
        return redirect()->route('trash');
    }
}
