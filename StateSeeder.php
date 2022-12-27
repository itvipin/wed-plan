<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();
        $states = [
            ['id' => 1, 'country_id' => 1, 'name' =>  'Alabama', 'status' => '1'],
            ['id' => 2, 'country_id' => 1, 'name' => 'Alaska', 'status' => '1'],
            ['id' => 3, 'country_id' => 1, 'name' => 'Arizona', 'status' => '1'],
            ['id' => 4, 'country_id' => 1, 'name' => 'Arkansas', 'status' => '1'],
            ['id' => 5, 'country_id' => 1, 'name' => 'California', 'status' => '1'],
            ['id' => 6, 'country_id' => 1, 'name' => 'Colorado', 'status' => '1'],
            ['id' => 7, 'country_id' => 1, 'name' => 'Connecticut', 'status' => '1'],
            ['id' => 8, 'country_id' => 1, 'name' => 'Delaware', 'status' => '1'],
            ['id' => 9, 'country_id' => 1, 'name' => 'Florida', 'status' => '1'],
            ['id' => 10, 'country_id' => 1, 'name' => 'Georgia', 'status' => '1'],
            ['id' => 11, 'country_id' => 1, 'name' => 'Hawaii', 'status' => '1'],
            ['id' => 12, 'country_id' => 1, 'name' => 'Idaho', 'status' => '1'],
            ['id' => 13, 'country_id' => 1, 'name' => 'Illinois', 'status' => '1'],
            ['id' => 14, 'country_id' => 1, 'name' => 'Indiana', 'status' => '1'],
            ['id' => 15, 'country_id' => 1, 'name' => 'Iowa', 'status' => '1'],
            ['id' => 16, 'country_id' => 1, 'name' => 'Kansas', 'status' => '1'],
            ['id' => 17, 'country_id' => 1, 'name' => 'Kentucky', 'status' => '1'],
            ['id' => 18, 'country_id' => 1, 'name' => 'Louisiana', 'status' => '1'],
            ['id' => 19, 'country_id' => 1, 'name' => 'Maine', 'status' => '1'],
            ['id' => 20, 'country_id' => 1, 'name' => 'Maryland', 'status' => '1'],
            ['id' => 21, 'country_id' => 1, 'name' => 'Massachusetts', 'status' => '1'],
            ['id' => 22, 'country_id' => 1, 'name' => 'Michigan', 'status' => '1'],
            ['id' => 23, 'country_id' => 1, 'name' => 'Minnesota', 'status' => '1'],
            ['id' => 24, 'country_id' => 1, 'name' => 'Mississippi', 'status' => '1'],
            ['id' => 25, 'country_id' => 1, 'name' => 'Missouri', 'status' => '1'],
            ['id' => 26, 'country_id' => 1, 'name' => 'Montana', 'status' => '1'],
            ['id' => 27, 'country_id' => 1, 'name' => 'Nebraska', 'status' => '1'],
            ['id' => 28, 'country_id' => 1, 'name' => 'Nevada', 'status' => '1'],
            ['id' => 29, 'country_id' => 1, 'name' => 'New Hampshire', 'status' => '1'],
            ['id' => 30, 'country_id' => 1, 'name' => 'New Jersey', 'status' => '1'],
            ['id' => 31, 'country_id' => 1, 'name' => 'New Mexico', 'status' => '1'],
            ['id' => 32, 'country_id' => 1, 'name' => 'New York', 'status' => '1'],
            ['id' => 33, 'country_id' => 1, 'name' => 'North Carolina', 'status' => '1'],
            ['id' => 34, 'country_id' => 1, 'name' => 'North Dakota', 'status' => '1'],
            ['id' => 35, 'country_id' => 1, 'name' => 'Ohio', 'status' => '1'],
            ['id' => 36, 'country_id' => 1, 'name' => 'Oklahoma', 'status' => '1'],
            ['id' => 37, 'country_id' => 1, 'name' => 'Oregon', 'status' => '1'],
            ['id' => 38, 'country_id' => 1, 'name' => 'Pennsylvania', 'status' => '1'],
            ['id' => 39, 'country_id' => 1, 'name' => 'Rhode Island', 'status' => '1'],
            ['id' => 40, 'country_id' => 1, 'name' => 'South Carolina', 'status' => '1'],
            ['id' => 41, 'country_id' => 1, 'name' => 'South Dakota', 'status' => '1'],
            ['id' => 42, 'country_id' => 1, 'name' => 'Tennessee', 'status' => '1'],
            ['id' => 43, 'country_id' => 1, 'name' => 'Texas', 'status' => '1'],
            ['id' => 44, 'country_id' => 1, 'name' => 'Utah', 'status' => '1'],
            ['id' => 45, 'country_id' => 1, 'name' => 'Vermont', 'status' => '1'],
            ['id' => 46, 'country_id' => 1, 'name' => 'Virginia', 'status' => '1'],
            ['id' => 47, 'country_id' => 1, 'name' => 'Washington', 'status' => '1'],
            ['id' => 48, 'country_id' => 1, 'name' => 'West Virginia', 'status' => '1'],
            ['id' => 49, 'country_id' => 1, 'name' => 'Wisconsin', 'status' => '1'],
            ['id' => 50, 'country_id' => 1, 'name' => 'Wyoming', 'status' => '1'],
            ['id' => 51, 'country_id' => 2, 'name' => 'Alberta', 'status' => '1'],
            ['id' => 52, 'country_id' => 2, 'name' => 'British Columbia', 'status' => '1'],
            ['id' => 53, 'country_id' => 2, 'name' => 'Manitoba', 'status' => '1'],
            ['id' => 54, 'country_id' => 2, 'name' => 'New Brunswick', 'status' => '1'],
            ['id' => 55, 'country_id' => 2, 'name' => 'Newfoundland and Labrador', 'status' => '1'],
            ['id' => 56, 'country_id' => 2, 'name' => 'Northwest Territories', 'status' => '1'],
            ['id' => 57, 'country_id' => 2, 'name' => 'Nova Scotia', 'status' => '1'],
            ['id' => 58, 'country_id' => 2, 'name' => 'Nunavut', 'status' => '1'],
            ['id' => 59, 'country_id' => 2, 'name' => 'Ontario', 'status' => '1'],
            ['id' => 60, 'country_id' => 2, 'name' => 'Prince Edward Island', 'status' => '1'],
            ['id' => 61, 'country_id' => 2, 'name' => 'Quebec', 'status' => '1'],
            ['id' => 62, 'country_id' => 2, 'name' => 'Saskatchewan', 'status' => '1'],
            ['id' => 63, 'country_id' => 2, 'name' => 'Yukon', 'status' => '1']
        ];
        DB::table('states')->insert($states);
    }
}
