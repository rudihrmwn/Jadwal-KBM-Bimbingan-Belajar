<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $fillable = ['name','lokasi_id','tingkat_id'];
    protected $hidden = ['pivot','created_at','updated_at'];

    public function kelasjambelajars() {
        return $this->hasMany(Kelasjambelajar::class);
    }

}
