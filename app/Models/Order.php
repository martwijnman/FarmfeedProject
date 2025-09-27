<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_date',
        'status',
        'expected_delivery_date',
        'new_delivery_date',
        'total_amount',
    ];
    public $timestamps = false;
}
