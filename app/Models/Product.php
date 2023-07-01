<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    ///////necessary table's column name
    protected $fillable = [
        'name',
        'price',
        'image',
        'brand_id',
        'category_id',
        'unit_id',
        'description',
        'status',
    ];

    /// table's relation(important to understand)
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function brand(){
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function unit(){
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}
