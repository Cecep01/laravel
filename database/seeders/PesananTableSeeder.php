<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'diki',
             'nama_barang' => 'buku',
             'qty' => 4,
             'tgl_pes' => '2021-06-01'],


             ['nama_pelanggan' => 'agung',
             'nama_barang' => 'pulpen',
             'qty' => 2,
             'tgl_pes' => '2021-05-02'],


             ['nama_pelanggan' => 'bagas',
             'nama_barang' => 'penggaris',
             'qty' => 1,
             'tgl_pes' => '2021-01-05'],


             ['nama_pelanggan' => 'fajar',
             'nama_barang' => 'penghapus',
             'qty' => 1,
             'tgl_pes' => '2021-04-01'],


             ['nama_pelanggan' => 'ikbal',
             'nama_barang' => 'tipx',
             'qty' => 4,
             'tgl_pes' => '2021-04-03']

        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
