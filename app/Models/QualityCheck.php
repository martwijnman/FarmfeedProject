<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QualityCheck extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'user_id', 'date', 'toxic', 'clean', 'safe'];
    public $timestamps = false;
}
