<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = 'Hero';
    protected $fillable = ['name', 'secret_identity', 'gender', 'hair_color', 'original_planet'];
}
