<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            [
                'code' => '00001',
                'name' => 'Warehouse1',
                'address' => 'Agadir',
                'phone' => '0600000000',
                'email' => '',
                'active' => true,
            ],
        ]);
    }
}
