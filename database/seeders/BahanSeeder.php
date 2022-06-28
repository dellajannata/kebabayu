<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahan')->insert([
            [
                'nama_bahan' => 'Daging ayam',
                'stok' => '10',
                'satuan' => 'kg',
                'harga' => '350000',
                'masaberlaku' => '2022/7/19'
            ],
            [
                'nama_bahan' => 'Keju',
                'stok' => '10',
                'satuan' => 'pc',
                'harga' => '150000',
                'masaberlaku' => '2022/12/19'
            ],
        ]);
    }
}
