<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'fortyFiveMinutes',
        'fifteenMinutes',
        'ninetyMinutes',
        'semester',
        'subject_id',
        'student_id',
    ];
}
