<?php

namespace Database\Seeders;

use App\Models\facility;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class facilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Resepsionis'
        ]);
        
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Ruang Santai'
        ]);
        
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Gym',
        ]);
        
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Kolam Renang',
        ]);
        
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Restoran',
        ]);
        
        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Prasmanan',
        ]);

        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Ruang Kerja',
        ]);

        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Kamar Mandi (Bathup)',
        ]);

        DB::table('facilities')->insert([
            'image' => '',
            'nama_fasilitas' => 'Kamar Mandi (Shower)',
        ]);
    }
}