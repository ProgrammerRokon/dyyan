<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    ///////necessary table's column name
    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    /// table's relation(important to understand)
    public function product(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
