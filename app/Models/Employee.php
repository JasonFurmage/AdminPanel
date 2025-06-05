<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','email','phone', 'company_id']; // Allow mass-assigning values to these fields.

    // Define 'belongs to' relationship with company.
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
