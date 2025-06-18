<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatMapel extends Model
{
    /** @use HasFactory<\Database\Factories\TingkatMapelFactory> */
    use HasFactory;

    protected $fillable = ['tingkat_id','mapel_id'];
}
