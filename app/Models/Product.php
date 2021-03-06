<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'reference', 'stock', 'details', 'description', 'price', 'shipping_cost', 'image_path'];
}
