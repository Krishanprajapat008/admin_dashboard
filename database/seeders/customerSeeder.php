<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'First_Name' => "Morton",
            'Last_Name' => 'Shanahan',
            'Mobile_num' => "9912345215",
            'Email' => 'Morton@gmail.com',
            'Gender' => "Male",
            'Profile_Picture' => '',
        ]);
    }
}
