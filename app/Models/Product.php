<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category', 'safety_status', 'stock_quantity', 'stock_treshold'];
    public $timestamps = false;
}
