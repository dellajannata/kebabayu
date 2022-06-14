<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Createadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' =>bcrypt('12345678'),
            ];

    }
}
?>