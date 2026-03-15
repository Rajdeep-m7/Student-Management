<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'course_id',
        'enrollment_date'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
