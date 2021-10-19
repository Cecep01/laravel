<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'jeruk' ,
             'varian' => 'jeruk nipis',
            'harga_beli' => 2000,
              'harga_jual' => 3000],

              ['nama' => 'mangga' ,
              'varian' => 'mangga aromanis',
             'harga_beli' => 3000,
               'harga_jual' => 4000],


               ['nama' => 'anggur' ,
               'varian' => 'anggur merah',
              'harga_beli' => 5000,
                'harga_jual' => 6000],

                ['nama' => 'jeruk' ,
                'varian' => 'jeruk aromanis',
               'harga_beli' => 4000,
                 'harga_jual' => 5000],

                 ['nama' => 'manggga' ,
                 'varian' => 'mangga manis',
                'harga_beli' => 5000,
                  'harga_jual' => 7000]

        ];
        DB::table('barangs')->insert($barang);


    }
}
