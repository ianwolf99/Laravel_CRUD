<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'position',
        'name',
        'email',
        'phone_number',
        'office_location',
        'office_hours',
        'responsibilities',
        // Add more attributes as needed
    ];

    /**
     * Get the users in the administration department.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the total number of staff members in the department.
     */
    public function totalStaffMembers()
    {
        return $this->users()->count();
    }

    /**
     * Get the email address of the head of the department.
     */
    public function departmentHeadEmail()
    {
        return $this->users()->where('position', 'Head')->value('email');
    }

    // Define more relationships or methods as needed
}
