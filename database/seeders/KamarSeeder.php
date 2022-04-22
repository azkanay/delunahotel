<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamar')->insert([
            'image' => 'https://images.unsplash.com/photo-1618221823713-ca8c0e6c9992?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80',
            'tipe_kamar' => 'Classic 1',
            'fasilitas_kamar' => 'Single bed, Free Wi-fi, TV 24 inch, AC, Water Heater, Shower, Food Service, Hotel Service, Kolam Renang, Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant.',
            'harga_kamar' => '3125000',
            'jumlah_kamar' => '26',
        ]);

        DB::table('kamar')->insert([
            'image' => 'https://images.unsplash.com/photo-1595576508898-0ad5c879a061?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
            'tipe_kamar' => 'Classic 2',
            'fasilitas_kamar' => '2 Single bed, Free Wi-fi, TV 24 inch, AC, Water Heater, Shower, Food Service, Hotel Service, Kolam Renang, Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant.',
            'harga_kamar' => '3500000',
            'jumlah_kamar' => '26',
        ]);

        DB::table('kamar')->insert([
            'image' => 'https://images.unsplash.com/photo-1615529162924-f8605388461d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80',
            'tipe_kamar' => 'Superior',
            'fasilitas_kamar' => 'Queen bed, Free Wi-fi, TV 32 inch, AC, Water Heater, Bathup, Shower, Food 
            Service, Hotel Service, Kolam Renang,
            Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant, 
            Lounge.',
            'harga_kamar' => '3850000',
            'jumlah_kamar' => '22',
        ]);

        DB::table('kamar')->insert([
            'image' => 'https://images.unsplash.com/photo-1612152605347-f93296cb657d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'tipe_kamar' => 'Deluxe',
            'fasilitas_kamar' => 'King bed, Free Wi-fi, TV 42 inch, AC, Water Heater, Bathup, Shower, Food 
            Service, Hotel Service, Kolam Renang,
            Microwave, Mini Fridge, Termos Listrik,
            Swimming Pool, Gym, Restaurant, 
            Lounge.',
            'harga_kamar' => '4250000',
            'jumlah_kamar' => '10',
        ]);
    }
}
