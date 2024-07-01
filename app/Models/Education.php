<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'institution_name',
        'faculty',
        'major',
        'grade',
        'start_year',
        'start_month',
        'expected_graduation_year',
        'expected_graduation_month',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
