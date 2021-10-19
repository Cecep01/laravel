<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
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
        ];
        DB::table('pemelis')->insert($a);

    }
}
