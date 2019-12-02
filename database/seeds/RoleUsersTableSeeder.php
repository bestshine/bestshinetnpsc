<?php

use Illuminate\Database\Seeder;

class RoleUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete role_user table records
        DB::table('role_user')->truncate();

        //insert role_user table records
        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
    }
}
