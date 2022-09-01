<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;
    protected $table = 'identity';
    protected $fillable = [
        'name', 'address','email','ktp'
    ];
}
