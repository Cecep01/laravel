<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            [
                'nama' => 'cecep superi',
                'tanggal_lahir' => '01 juni 2004',
                'jk' => 'laki-laki',
                'alamat' => 'babakan nugraha',
                'agama' => 'islam',
                'umur' => '17',
                'hobi' => 'maen game'
            ],
            [
                'nama' => 'Ikbal',
                'tanggal_lahir' => '02 mei 2003',
                'jk' => 'laki-laki',
                'alamat' => 'nusa',
                'agama' => 'islam',
                'umur' => '18',
                'hobi' => 'maen game'
            ],
            [
                'nama' => 'bagas',
                'tanggal_lahir' => '02 januari 2022',
                'jk' => 'laki-laki',
                'alamat' => 'bmi',
                'agama' => 'islam',
                'umur' => '17',
                'hobi' => 'maen game'
            ],
            [
                'nama' => 'diki',
                'tanggal_lahir' => '02 januari 2022',
                'jk' => 'laki-laki',
                'alamat' => 'bihbul',
                'agama' => 'islam',
                'umur' => '17',
                'hobi' => 'maen game'
            ],
            [
                'nama' => 'farid',
                'tanggal_lahir' => '02 januari 2022',
                'jk' => 'laki-laki',
                'alamat' => 'bmi',
                'agama' => 'islam',
                'umur' => '17',
                'hobi' => 'maen game'
            ]
        ];
        DB::table('biodatas')->insert($biodatas);
        //
    }
}
