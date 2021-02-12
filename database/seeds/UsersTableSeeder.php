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
            'user_name' => 'Admin',
            'user_type' => 'Admin',
            'status' => 'Active',
            'email' => 'super.admin@gmail.com',
            'password' => bcrypt('123')
        ]);


        DB::table('users')->insert([
            'user_name' => 'Employer_1',
            'user_type' => 'Employer',
            'status' => 'Active',
            'email' => 'employer@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
