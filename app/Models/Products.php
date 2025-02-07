<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;


    protected $fillable = [
        'name',
        'catalog',
        'image',
        'slug',
        'model',
        'category_id',
        'tag_id',
        'brand_id',
    ];

    public function brand(){
        return $this->belongsTo(Brands::class);
    }
    
    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function tag(){
        return $this->belongsTo(Tags::class);
    }
}

