<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $table = 'sauce';

    protected $primaryKey = 'sauce_id';

    protected $fillable = [
        'sauce_id',
        'name'
    ];
}
