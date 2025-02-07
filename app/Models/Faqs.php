<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    /** @use HasFactory<\Database\Factories\FaqsFactory> */
    use HasFactory;

    protected $fillable = [
        'questions',
        'answers',
    ];
}
