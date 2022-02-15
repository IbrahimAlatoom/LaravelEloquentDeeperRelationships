<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Db;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            [
                'country_id' => 1,
                'name' => 'Amman'
            ],
            [
                'country_id' => 1,
                'name' => 'Jerash'
            ],
            [
                'country_id' => 2,
                'name' => 'Beirut'
            ],
            [
                'country_id' => 2,
                'name' => 'Jabl'
            ],
            [
                'country_id' => 3,
                'name' => 'California '
            ],
            [
                'country_id' => 4,
                'name' => 'Toronto'
            ],
            
        ]);
    }
}
