<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'nama_menu' => 'Kebab 1',
                'harga' => '18000',
                'stok' => '25',
                'gambar' => '1.jpg'
            ],
            [
                'nama_menu' => 'Kebab 2',
                'harga' => '20000',
                'stok' => '25',
                'gambar' => '2.jpg'
            ],
            [
                'nama_menu' => 'Kebab 3',
                'harga' => '15000',
                'stok' => '25',
                'gambar' => '3.jpg'
            ],
            [
                'nama_menu' => 'Kebab 4',
                'harga' => '25000',
                'stok' => '25',
                'gambar' => '4.jpg'
            ],
            [
                'nama_menu' => 'Kebab 5',
                'harga' => '28000',
                'stok' => '25',
                'gambar' => '5.jpg'
            ],

        ]);
    }
}