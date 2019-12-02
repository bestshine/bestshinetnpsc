<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatesMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete states_master table records
        DB::table('states_master')->truncate();

        //insert states_master table records
        DB::table('states_master')->insert([
	        [
	            'name' => 'Andaman and Nicobar Islands',
	            'slug' => 'andaman-nicobar-islands',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],        	
	        [
	            'name' => 'Andhra Pradesh',
	            'slug' => 'andhra-pradesh',
	            'created_at' =>Carbon::now(),
	            'updated_at' =>Carbon::now()
	        ],
	        [
            	'name' => 'Arunachal Pradesh',
            	'slug' => 'arunachal-pradesh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Assam',
            	'slug' => 'assam',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Bihar',
            	'slug' => 'bihar',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Chandigarh',
            	'slug' => 'chandigarh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],        	
	        [
            	'name' => 'Chhattisgarh',
            	'slug' => 'chhattisgarh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Dadar and Nagar Haveli',
            	'slug' => 'dadar-nagar-haveli',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	], 
	        [
            	'name' => 'Daman and Diu',
            	'slug' => 'daman-diu',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	], 
	        [
            	'name' => 'Delhi',
            	'slug' => 'delhi',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],         	        	       	
	        [
            	'name' => 'Goa',
            	'slug' => 'goa',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Gujarat',
            	'slug' => 'gujarat',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Haryana',
            	'slug' => 'haryana',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Himachal Pradesh',
            	'slug' => 'himachal-pradesh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Jammu and Kashmir',
            	'slug' => 'jammu-kashmir',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Jharkhand',
            	'slug' => 'jharkhand',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Karnataka',
            	'slug' => 'karnataka',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Kerala',
            	'slug' => 'kerala',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Lakshadweep',
            	'slug' => 'lakshadweep',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],        	
	        [
            	'name' => 'Madhya Pradesh',
            	'slug' => 'madhya-pradesh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Maharashtra',
            	'slug' => 'maharashtra',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Manipur',
            	'slug' => 'manipur',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Meghalaya',
            	'slug' => 'meghalaya',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Mizoram',
            	'slug' => 'mizoram',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Nagaland',
            	'slug' => 'nagaland',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Odisha',
            	'slug' => 'odisha',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Punjab',
            	'slug' => 'punjab',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Puducherry',
            	'slug' => 'puducherry',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],        	
	        [
            	'name' => 'Rajasthan',
            	'slug' => 'rajasthan',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Sikkim',
            	'slug' => 'sikkim',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Tamil Nadu',
            	'slug' => 'tamil-nadu',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Telangana',
            	'slug' => 'telangana',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Tripura',
            	'slug' => 'tripura',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Uttar Pradesh',
            	'slug' => 'uttar-pradesh',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'Uttarakhand',
            	'slug' => 'uttarakhand',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	],
	        [
            	'name' => 'West Bengal',
            	'slug' => 'west-bengal',
            	'created_at' =>Carbon::now(),
            	'updated_at' =>Carbon::now()
        	]        	        	        	        	        	        	        
        ]);         
    }
}
