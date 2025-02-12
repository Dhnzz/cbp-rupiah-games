<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    protected $fillable = [
        'name',
        'age',
        'phone',
        'address',
        'gender',
        'game',
        'skor',
    ];
}
