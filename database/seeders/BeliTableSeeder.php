<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $a = [
            ['nama' => 'diki',
            'jk' => 'laki-laki',
            'alamat' => 'bihbul',
            'kode_pos' => 'ss34',
            'kota' => 'bandung',
            'tgl_lahir' => '2002-04-01'],
            ['nama' => 'farid',
            'jk' => 'laki-laki',
            'alamat' => 'nusa',
            'kode_pos' => 'ss35',
            'kota' => 'bandung',
            'tgl_lahir' => '2002-04-02'],
            ['nama' => 'farid',
            'jk' => 'laki-laki',
            'alamat' => 'bmi',
            'kode_pos' => 'ss36',
            'kota' => 'bandung',
            'tgl_lahir' => '2002-04-05'],
            ['nama' => 'bagas',
            'jk' => 'laki-laki',
            'alamat' => 'bmi',
            'kode_pos' => 'ss36',
            'kota' => 'bandung',
            'tgl_lahir' => '2002-04-01'],
            ['nama' => 'wildan',
            'jk' => 'laki-laki',
            'alamat' => 'nusa',
            'kode_pos' => 'ss39',
            'kota' => 'bandung',
            'tgl_lahir' => '2002-04-07'],
        ];
        DB::table('belis')->insert($a);

    }
}
