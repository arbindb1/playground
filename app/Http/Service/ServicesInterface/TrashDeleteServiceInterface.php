<?php
namespace App\Http\Service\ServicesInterface;

interface TrashDeleteServiceInterface{
    public function deleteTrash($id,$type);
}
