<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residential extends Model
{
    use HasFactory;
    protected $table ="residentials";

    protected $casts = [
        'address' => 'object',
    ];
}
