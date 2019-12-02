<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LanguagesMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete states_master table records
        DB::table('languages_master')->truncate();

        //insert states_master table records
        DB::table('languages_master')->insert([
	        [
	            'name' => 'Tamil',
	            'state_id' => json_encode(['28','31']),
	            'slug' => 'tamil',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],        	
	        [
	            'name' => 'English',
	            'state_id' => json_encode(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36']),
	            'slug' => 'english',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Hindi',
	            'state_id' => json_encode(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36']),
	            'slug' => 'hindi',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],	        
	        [
	            'name' => 'Malayalam',
	            'state_id' => json_encode(['18','19']),
	            'slug' => 'malayalam',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Telugu',
	            'state_id' => json_encode(['2','32']),
	            'slug' => 'telugu',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Kannada',
	            'state_id' => json_encode(['17']),
	            'slug' => 'kannada',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Gujarati',
	            'state_id' => json_encode(['8','9','12']),
	            'slug' => 'gujarati',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Marathi',
	            'state_id' => json_encode(['8','9','21']),
	            'slug' => 'marathi',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Punjabi',
	            'state_id' => json_encode(['27']),
	            'slug' => 'punjabi',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],	        
	        [
	            'name' => 'Bengali',
	            'state_id' => json_encode(['33','36']),
	            'slug' => 'bengali',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Urdu',
	            'state_id' => json_encode(['15']),
	            'slug' => 'urdu',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Sanskrit',
	            'state_id' => json_encode(['5']),
	            'slug' => 'sanskrit',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ]        
        ]);        
    }
}
