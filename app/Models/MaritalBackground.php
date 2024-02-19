<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalBackground extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'status'];
}
