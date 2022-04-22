<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected  $fillable =[
        'image', 'tipe_kamar', 'fasilitas_kamar', 'harga_kamar', 'jumlah_kamar'
    ];

    protected $table = 'kamar';

    public function detailBooking()
    {
        return $this->hasMany(Booking::class, 'id_kamar', 'id');
    }
}
