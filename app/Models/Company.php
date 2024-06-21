<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'website',
        'contact_email',
        'phone_number',
        'founded_date',
        'number_of_employees',
        'address',
        'city',
        'area',
        'logo_url',
    ];
}
