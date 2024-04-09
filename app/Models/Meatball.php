<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meatball extends Model
{
    use HasFactory;

    protected $table = 'meatball';

    protected $primaryKey = 'meatball_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'amount',
        'image'
    ];
}
