<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    /** @use HasFactory<\Database\Factories\TrainingsFactory> */
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'training_type',
    ];
}
