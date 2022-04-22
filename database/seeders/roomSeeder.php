<?php

namespace Database\Seeders;

use App\Models\room;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            'image' => '',
            'tipe_kamar' => 'Classic 1',
            'fasilitas_kamar' => 'Single bed, Free Wi-fi, TV 24 inch, AC, Water Heater, Shower, Food Service, Hotel Service, Kolam Renang, Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant.',
            'harga_kamar' => 'Rp3.125.000/night',
            'jumlah_kamar' => 26
        ]);
        
        DB::table('room')->insert([
            'image' => '',
            'tipe_kamar' => 'Classic 2',
            'fasilitas_kamar' => '2 Single bed, Free Wi-fi, TV 24 inch, AC, Water Heater, Shower, Food Service, Hotel Service, Kolam Renang, Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant.',
            'harga_kamar' => 'Rp3.500.000/night',
            'jumlah_kamar' => 26
        ]);
        
        DB::table('room')->insert([
            'image' => '',
            'tipe_kamar' => 'Superior',
            'fasilitas_kamar' => 'Queen bed, Free Wi-fi, TV 32 inch, AC, Water Heater, Bathup, Shower, Food 
            Service, Hotel Service, Kolam Renang,
            Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant, 
            Lounge.',
            'harga_kamar' => 'Rp3.850.000/night',
            'jumlah_kamar' => 22
        ]);
        DB::table('room')->insert([
            'image' => '',
            'tipe_kamar' => 'Deluxe',
            'fasilitas_kamar' => 'King bed, Free Wi-fi, TV 42 inch, AC, Water Heater, Bathup, Shower, Food 
            Service, Hotel Service, Kolam Renang,
            Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant, 
            Lounge.',
            'harga_kamar' => 'Rp4.250.000/night',
            'jumlah_kamar' => 10
        ]);
    }
}