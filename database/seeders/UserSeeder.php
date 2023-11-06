<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // [
            //     'name' => 'zanggi',
            //     'email' => 'zanggi@gmail.com',
            //     'password' => Hash::make('zanggi12345'),
            //     'phone' => '081211452609',
            //     'roles' => 'PELANGGAN'
            // ],
            // [
            //     'name' => 'Admin',
            //     'email' => 'admin@gmail.com',
            //     'password' => Hash::make('admin12345'),
            //     'phone' => '0812',
            //     'roles' => 'ADMIN'
            // ],
            // [
            //     'name' => 'Teknisi',
            //     'email' => 'teknisi@gmail.com',
            //     'password' => Hash::make('teknisi12345'),
            //     'phone' => '081234',
            //     'roles' => 'TEKNISI'
            // ],
        ];

        DB::table('users')->insert($users);
    }
}
