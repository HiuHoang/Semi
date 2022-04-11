<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'username' => 'hieuhd',
            'password' => Hash::make('123'),
            'fullname' => 'Hieu Hoang Dinh',
            'userimage' => 'sampleuser.png',
            'email' => 'hieuhd@gmail.com',
            'address' => 'Me Linh-Ha Noi',
            'role_id' => '1'
        ]);
    }
}
