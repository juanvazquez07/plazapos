<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'description', 'price', 'cost', 'stock_id', 'category_id', 'brand_id', 'image'];
}
