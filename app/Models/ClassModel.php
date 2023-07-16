<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'classes';

    protected $fillable = ['name', 'year'];

    protected $dates = ['created_at', 'updated_at'];

    // Relationships
    // Example: a class has many students
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}