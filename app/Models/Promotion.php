<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotion';

    protected $primaryKey = 'promotion_id';

    protected $fillable = [
        'name',
        'discount',
        'start_date',
        'end_date'
    ];
}
