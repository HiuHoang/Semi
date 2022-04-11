<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productname' => 'T-shirt',
            'productimage' => 'sampleproduct.png',
            'price' => '10.7',
            'productdescription' => 'This is a first product of me',
            'colour' => 'blue',
            'origin' => 'USA',
        ]);
    }
}
