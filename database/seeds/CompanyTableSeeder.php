<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 1 ,
            'name' => 'Techno System',
            'email' => 'technosystem@gmail.com',
            'number'=> '0185757445',
            'address'=> 'Dhaka',
            'image' => 'business-5db562f6be28e.jpg'
        ]);
    }
}
