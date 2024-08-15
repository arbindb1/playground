<?php
namespace App\Http\Service\ServicesInterface;

interface TrashRestoreServiceInterface{
    public function restoreTrash($id,$type);
}
