<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'nama_fasilitas'
    ];

    protected $table = 'fasilitas';

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class,'fasilitas');
    }
}
