<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    /** @use HasFactory<\Database\Factories\PengajarFactory> */
    use HasFactory;

    protected $fillable = ['name','short_name','phone_number'];
    protected $hidden = ['pivot','created_at','updated_at'];

    public function mapels() {
        return $this->belongsToMany(Mapel::class,'pengajar_mapels');
    }

}
