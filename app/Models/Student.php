<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateOfBirth',
        'gender',
        'address',
        'classroom_id',
    ];

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'scores', 'student_id', 'subject_id');
    }
}
