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
        //
        $numberOfUsers = DB::table('users')->count();

        if($numberOfUsers == 0)
        {
            DB::table('users')->insert(
                [
                    [
                        'name' => 'Administrator',
                        'email' => 'caredelhi4@gmail.com',
                        'password' => bcrypt('test123456'),
                        'role_id' => 1,
                        'created_at' => now(),
                        'updated_at' => now()
                    ],  
                ]
            );
        }
    }
}
