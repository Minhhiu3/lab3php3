<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class bookSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('books')->insert([
                'title' => 'Book ' . $i,
               'thumbnail' => 'https://picsum.photos/640/480?random=' . $i,

                'author' => 'Author ' . $i,
                'publisher' => 'Publisher ' . rand(1, 5),
                'publication' => now(),
                'price' => rand(10000, 100000),
                'quantity' => rand(1, 50),
                'category_id' => rand(1, 5),
            ]);
        }
    }
    
}