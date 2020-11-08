<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'id' => '1007',
        	'name'=>'Super Admin',
        	'slug' => 'superadmin'
        ]);
        DB::table('roles')->insert([
        	'id' => '1005',
        	'name'=>'Admin',
        	'slug' => 'admin'
        ]);
        DB::table('roles')->insert([
        	'id' => '191',
        	'name'=>'Member',
        	'slug' => 'member'
        ]);
    }
}
