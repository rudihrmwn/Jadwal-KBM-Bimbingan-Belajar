<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
    /** @use HasFactory<\Database\Factories\TingkatFactory> */
    use HasFactory;

    protected $fillable = ['name'];
    protected $hidden = ['pivot','created_at','updated_at'];

    public function mapels() {
        return $this->belongsToMany(Mapel::class,'tingkat_mapels');
    }
}
