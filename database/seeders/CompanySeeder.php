<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Db;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            [
                'city_id' => 1,
                'name' => 'Amazon'
            ],
            [
                'city_id' => 1,
                'name' => 'Microsoft'
            ],
            [
                'city_id' => 2,
                'name' => 'Ibratoom'
            ],
            [
                'city_id' => 2,
                'name' => 'MediaProduction'
            ],
            [
                'city_id' => 3,
                'name' => 'Facebook '
            ],
            [
                'city_id' => 4,
                'name' => 'Instagram'
            ],
            
        ]);
    }
}
