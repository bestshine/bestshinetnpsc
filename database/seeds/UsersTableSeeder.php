<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //delete users table records
        DB::table('users')->truncate();

        //insert users table records
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone_no' => '1234567890',
            'password' => Hash::make('123456'),
            'slug' => 'admin',
           'created_date' => date("d-m-Y"),
        ]);
        //DB::table('users')->where('email','=','admin@gmail.com')->update(['password' =>Hash::make('123456')]);
    }
}
