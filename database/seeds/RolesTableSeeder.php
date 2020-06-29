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
        //
        $numberOfRoles = DB::table('roles')->count();

        if($numberOfRoles == 0)
        {
        	DB::table('roles')->insert(
        		[
                    [
                    	'name' => 'Admin',
                    	'label' => 'admin',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ],
                    [
                    	'name' => 'Customer',
                    	'label' => 'customer',
                    	'created_at' => now(),
                    	'updated_at' => now()
                    ]
                ]
        	);
    	}
    }
}
