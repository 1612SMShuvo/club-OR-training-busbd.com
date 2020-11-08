<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id'=> '1007',
        	'name' => 'James',
        	'email' => 'superadmin@site.com',
        	'password' => bcrypt('superadminroot1007')
        ]);
        DB::table('users')->insert([
        	'role_id'=> '1005',
        	'name' => 'MD. Admin',
        	'email' => 'admin@club.com',
        	'password' => bcrypt('adminroot')
        ]);
        DB::table('users')->insert([
        	'role_id'=> '191',
        	'name' => 'Mr. Member',
        	'email' => 'member@club.com',
        	'password' => bcrypt('memberroot')
        ]);
    }
}
