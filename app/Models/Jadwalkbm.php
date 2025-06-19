<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalkbm extends Model
{
    /** @use HasFactory<\Database\Factories\JadwalkbmFactory> */
    use HasFactory;

    protected $fillable = ['date','kelas_id','day','jam_id','room','mapel_id','pengajar_id','pertemuan'];
    protected $hidden = ['pivot','created_at','updated_at'];
}
