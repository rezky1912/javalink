<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'status', 'price', 'customer_first_name', 'customer_email', 'item_name', 'checkout_link'];
}
