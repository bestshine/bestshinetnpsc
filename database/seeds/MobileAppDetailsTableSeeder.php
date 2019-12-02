<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MobileAppDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('mobile_app_details')->truncate();

        //insert users table records
        DB::table('mobile_app_details')->insert([
            'version' => '0.0.1',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);        
    }
}
