<?php

use Illuminate\Database\Seeder;

class ExperimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset users table
   		DB::statement('SET FOREIGN_KEY_CHECKS=0');	
        DB::table('users')->truncate();

        //generate sample values NOTE: 'TEST 1'

        DB::table('users')->insert([

        	[
        		'user_id' => "10",
        		'lastName' => "Bato",
        		'firstName' => "Jayron",
        		'username' => "jay05",
        		'password' => "1738"
        	],	

        	[
        		'user_id' => "11",
        		'lastName' => "Gelera",
        		'firstName' => "Kenji",
        		'username' => "kenjids",
        		'password' => "2020"
        	],	

        	[
        		'user_id' => rand(12,10),
        		'lastName' => "Avila",
        		'firstName' => "Manuel",
        		'username' => "Bilog",
        		'password' => "2050"
        	]	



        	]);

    }
}
