<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=[
        'math',
        'physical',
        'chemistry',
        'literature',
        'history',
        'geography',
        'biology',
        'english',
        'exercise',
        'civicEducation',
    ];
    public function students(){
        return $this->belongsToMany(Student::class,'scores','subject_id','student_id');
    }
}
