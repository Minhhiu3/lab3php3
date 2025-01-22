<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('categories')->insert([
        ['name' => 'Science'],
        ['name' => 'Technology'],
        ['name' => 'Fiction'],
        ['name' => 'History'],
        ['name' => 'Biography'],
    ]);
}

}