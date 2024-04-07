<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'order';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'customer_id', 
        'payment_id', 
        'sauce_id', 
        'side_dishes_id', 
        'promotion_id', 
        'order_date', 
        'payment_date', 
        'total_price'
    ];
}
