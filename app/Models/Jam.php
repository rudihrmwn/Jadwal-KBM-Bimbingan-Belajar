<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    /** @use HasFactory<\Database\Factories\JamFactory> */
    use HasFactory;

    protected $fillable = ['name'];
}
