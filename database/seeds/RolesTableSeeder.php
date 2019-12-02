<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	//delete roles table records
        DB::table('roles')->truncate();

        //insert roles table records
        DB::table('roles')->insert([
        	[
            	'name' => 'Admin',
            	'display_name' => 'Admin',
            	'description' => 'All Access'
            ],
        	[
            	'name' => 'User',
            	'display_name' => 'User',
            	'description' => 'Particular Access'        		
        	]
        ]);
    }
}
