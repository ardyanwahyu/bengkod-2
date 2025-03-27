<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perriksa::create([
            'id_pasien'=> 2,
            'id_dokter'=> 1,
            'tgl_periksa'=> Carbon ::now(),
            'catatan'=>'pasien mengalama demam tinggi dan batuk',
            'biaya_periksa'=>150000
        ]);
    }
}
