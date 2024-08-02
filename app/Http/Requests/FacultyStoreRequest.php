<?php
namespace App\Http\Requests;
use Illuminate\foundation\Http\FormRequest;

class FacultyStoreRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
            'name' => 'required|string|max:255'
        ];
    }
}