<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama_barang' => 'odol',
            'nama_supplier' => 'diki',
            'qty' => 2,
            'tgl' => '2021-04-01'
        ],
        ['nama_barang' => 'sabun',
        'nama_supplier' => 'agung',
        'qty' => 2,
        'tgl' => '2021-04-02'
    ],
    ['nama_barang' => 'shampo',
    'nama_supplier' => 'bagas',
    'qty' => 2,
    'tgl' => '2021-04-03'
],
['nama_barang' => 'rinso',
'nama_supplier' => 'adi',
'qty' => 2,
'tgl' => '2021-04-04'
],
['nama_barang' => 'sabun mandi',
'nama_supplier' => 'adit',
'qty' => 2,
'tgl' => '2021-04-05'
]
    ];

    DB::table('pembelians')->insert($pembeli);
    }
}
