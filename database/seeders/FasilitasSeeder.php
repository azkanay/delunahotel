<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1545447859-096b1442cd4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80',
            'nama_fasilitas' => 'Restoran (Prasmanan)'
        ]);
                
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1619676663454-321694d80d09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Restoran',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1505410603994-c3ac6269711f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Resepsionis'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1621293954908-907159247fc8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Ruang Santai'
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Gym',
        ]);
        
        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1563493653502-9e270be23596?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
            'nama_fasilitas' => 'Kolam Renang',
        ]);

        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1571624436279-b272aff752b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80',
            'nama_fasilitas' => 'Ruang Kerja',
        ]);

        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1604709177225-055f99402ea3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Kamar Mandi (Bathup)',
        ]);

        DB::table('fasilitas')->insert([
            'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
            'nama_fasilitas' => 'Kamar Mandi (Shower)',
        ]);
    }
}
