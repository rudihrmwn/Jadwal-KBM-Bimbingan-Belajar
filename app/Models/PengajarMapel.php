<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajarMapel extends Model
{
    /** @use HasFactory<\Database\Factories\PengajarMapelFactory> */
    use HasFactory;

    protected $fillable = ['pengajar_id','mapel_id'];

}
