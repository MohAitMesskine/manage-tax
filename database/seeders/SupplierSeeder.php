<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'code' => '0001',
                'name' => 'Supplier1',
                'phone' => '',
                'email' => '',
                'adresse' => '',
                'city' => 'Agadir',
                'country' => '',
                'note' => '',
                'active' => true,
            ],
        ]);
    }
}