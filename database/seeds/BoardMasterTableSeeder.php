<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BoardMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete boards_master table records
        DB::table('boards_master')->truncate();

        //insert boards_master table records
        DB::table('boards_master')->insert([
	        [
	            'name' => 'State Board',
	            'slug' => 'state-board',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
	            'name' => 'Central Board(CBSE)',
	            'slug' => 'central-board',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ]	                	        
        ]);        
    }
}
