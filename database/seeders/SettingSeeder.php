<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'code' => 'company_name',
                'name' => 'COD'
            ],
            [
                'code' => 'company_logo',
                'name' => 'image'
            ],
            [
                'code' => 'language',
                'name' => 'en'
            ],
            [
                'code' => 'currency_symbol',
                'name' => '$'
            ],
        ]);
    }
}
