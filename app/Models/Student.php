<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'gender',
        'nationality',
        'address',
        'phone_number',
        'admission_date',
        'graduation_date',
        // Add more attributes as needed
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get the courses that the student is enrolled in.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    /**
     * Get the grades for the student.
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    /**
     * Get the student's advisor.
     */
    public function advisor()
    {
        return $this->belongsTo(Teacher::class, 'advisor_id');
    }

    /**
     * Get the student's program.
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    // Define more relationships or methods as needed
}
