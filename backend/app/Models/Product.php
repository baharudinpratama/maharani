<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
        'price',
        'quantity',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
