<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'website', 'logo']; // Allow mass-assigning values to these fields.

    // Define 'has many' relationship with employee.
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}