<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Others',
                'description' => 'Others',
                'active' => true,
            ],
            [
                'name' => 'Electronics',
                'description' => 'Electronics',
                'active' => true,
            ],
            [
                'name' => 'Computers',
                'description' => 'Computers',
                'active' => true,
            ],
            [
                'name' => 'Smart Home',
                'description' => 'Smart Home',
                'active' => true,
            ],
            [
                'name' => 'Arts & Crafts',
                'description' => 'Arts & Crafts',
                'active' => true,
            ],
            [
                'name' => 'Fashion',
                'description' => 'Fashion',
                'active' => true,
            ],
            [
                'name' => 'Baby',
                'description' => 'Baby',
                'active' => true,
            ],
            [
                'name' => 'Health & Care',
                'description' => 'Health & Care',
                'active' => true,
            ],
            [
                'name' => 'Mobile Accesories',
                'description' => 'Mobile Accesories',
                'active' => true,
            ],
        ]);
    }
}
