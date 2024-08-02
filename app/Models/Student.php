<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'faculty'
    ];
    protected $table ="students";
    public function fc(){
        return $this->belongsTo(Faculty::class, 'faculty');
    }
}
