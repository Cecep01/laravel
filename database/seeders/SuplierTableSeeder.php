<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sup = [
            ['nama' => 'diki',
            'alamat' => 'bihbul',
            'kode_pos' => 'sd3030',
            'kota' => 'bandung'],


            ['nama' => 'agung',
            'alamat' => 'cilisung',
            'kode_pos' => 'sd3031',
            'kota' => 'bandung'],
            ['nama' => 'ikbal',
            'alamat' => 'nusa',
            'kode_pos' => 'sd3033',
            'kota' => 'bandung'],

            ['nama' => 'bagas',
            'alamat' => 'bmi',
            'kode_pos' => 'sd3035',
            'kota' => 'bandung'],
            ['nama' => 'cecep',
            'alamat' => 'babakan',
            'kode_pos' => 'sd3037',
            'kota' => 'bandung']

        ];
        DB::table('suppliers')->insert($sup);

    }
}
