<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'detail', 'price', 'image', 'review_count', 'stock_status', 'stock_count'];
}
