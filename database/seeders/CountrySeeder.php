<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Db;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert([
            ['name' => 'Jordan'],
            ['name' => 'Lebanon'],
            ['name' => 'United States'],
            ['name' => 'Canada']
        ]);
    }
}
