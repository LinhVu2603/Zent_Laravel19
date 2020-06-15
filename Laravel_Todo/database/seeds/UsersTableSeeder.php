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
    	DB::table('users')->truncate();
        DB::table('users')->insert([
        	'name' => 'admin',
        	'phone' => '0971524178',
        	'email' => 'admin@gmail.com',
        	'role' => 1,
        	'password' => bcrypt('secret'),
        ]);
        for($i = 1; $i < 10; $i++){
        	DB::table('users')->insert([
        	'name' => 'admin' . $i,
        	'phone' => '097152417' . $i,
        	'email' => 'admin' . $i . '@gmail.com',
        	'role' => 1,
        	'password' => bcrypt('secret'),
        ]);
        }
    }
}
