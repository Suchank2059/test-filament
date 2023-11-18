<?php

namespace App\Models;

use Database\Factories\EmployeeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'state_id',
        'city_id',
        'department_id',
        'first_name',
        'last_name',
        'birth_date',
        'address',
        'zipcode',
        'date_hired'
    ];

    protected static function newFactory(): EmployeeFactory
    {
        return EmployeeFactory::new();
    }
}
