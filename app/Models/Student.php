<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'faculty'
    ];
    protected $dates = ['deleted_at'];
    protected $table ="students";
    public function fc(){
        return $this->belongsTo(Faculty::class, 'faculty');
    }
}
