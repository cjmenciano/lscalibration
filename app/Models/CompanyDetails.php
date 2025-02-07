<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyDetailsFactory> */
    use HasFactory;

    protected $fillable = [
        'company_name',
        'address',
        'contact',
        'email',
        'image',
        'map_location',
        'start_working_day',
        'end_working_day',
        'start_working_hours',
        'end_working_hours',
    ];
}
