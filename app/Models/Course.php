<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'code',
        'department',
        'credits',
        // Add more attributes as needed
    ];

    /**
     * Get the students enrolled in this course.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    /**
     * Get the teacher who teaches this course.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Get the department to which this course belongs.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the average grade for this course.
     */
    public function averageGrade()
    {
        // Logic to calculate the average grade for this course
    }

    // Define more relationships or methods as needed
}
