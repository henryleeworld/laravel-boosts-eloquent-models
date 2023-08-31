<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'id'    => 1,
            ],
            [
                'id'    => 2,
            ],
            [
                'id'    => 3,
            ],
        ];
        Country::insert($countries);
    }
}
