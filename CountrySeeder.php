<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();
        $countries = [
            [
                'id' => 1,
                'code' => '1',
                'name' => 'United States',
                'continent_name' => 'North America',
                'status' => '1'
            ],
            [
                'id' => 2,
                'code' => '1',
                'name' => 'Canada',
                'continent_name' => 'North America',
                'status' => '1'
            ]

        ];

        DB::table('countries')->insert($countries);
    }
}
