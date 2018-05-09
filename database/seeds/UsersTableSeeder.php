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
        DB::table('users')->insert([
            'name' => 'Dave Bachor',
            'systemID' => 2,
            'email' => 'dave@dave.com',
            'imageFileName' => '/img/default.png',
            'password' => bcrypt('davedave'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Matt',
            'systemID' => 2,
            'email' => 'matt@matt.com',
            'imageFileName' => '/img/default.png',
            'password' => bcrypt('matthew'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
