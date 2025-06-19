<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasjambelajar extends Model
{
    /** @use HasFactory<\Database\Factories\KelasjambelajarFactory> */
    use HasFactory;

    protected $fillable = ['day','room','kelas_id','jam_id'];
    protected $hidden = ['pivot','created_at','updated_at'];
}
