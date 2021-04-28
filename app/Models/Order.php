<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_product_value', 'total_shipping_value', 'client_name', 'client_address'];

    public $timestamps = false;
}
