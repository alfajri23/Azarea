<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanans')->insert([
            [
                'nama' => 'Sewa Mobil',
                'desc' => 'isi',
                'foto' => 'foto'
            ],
            [
                'nama' => 'Layanan Wisata',
                'desc' => 'isi',
                'foto' => 'foto'
            ],
            [
                'nama' => 'Layanan Outbond',
                'desc' => 'isi',
                'foto' => 'foto'
            ],
            
        ]);
    }
}
