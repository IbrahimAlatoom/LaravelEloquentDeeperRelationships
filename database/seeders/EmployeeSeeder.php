<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Db;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            [
                'company_id' => 1,
                'name' => 'Ibrahim'
            ],
            [
                'company_id' => 2,
                'name' => 'Zaka'
            ],
            [
                'company_id' => 3,
                'name' => 'Hosam'
            ],
            [
                'company_id' => 4,
                'name' => 'Talia'
            ],
            [
                'company_id' => 4,
                'name' => 'Alatoom '
            ],
            [
                'company_id' => 5,
                'name' => 'Moh'
            ],
            
        ]);
    }
}
