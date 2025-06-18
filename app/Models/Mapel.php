<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    /** @use HasFactory<\Database\Factories\MapelFactory> */
    use HasFactory;

    protected $fillable = ['name','short_name'];
    protected $hidden = ['pivot','created_at','updated_at'];

    public function tingkats() {
        return $this->belongsToMany(Tingkat::class,'tingkat_mapels');
    }

    public function pengajars() {
        return $this->belongsToMany(Pengajar::class,'pengajar_mapels');
    }
}
