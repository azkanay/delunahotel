<?php

namespace App\Models;

use App\Models\Kamar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = [
        'id_kamar',
        'check_in',
        'check_out',
        'nama_pemesan',
        'email',
        'nomor_hp',
        'nama_tamu',
        'tipe_kamar',
        'jumlah_kamar',
        'harga_kamar',
    ];

    public function detailKamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id');
    }
}
