<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideDishes extends Model
{
    use HasFactory;

    protected $table = 'side_dishes';

    protected $primaryKey = 'side_dishes_id';

    protected $fillable = [
        'name'
    ];
}
