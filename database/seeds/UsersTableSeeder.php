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
            'systemID' => 1,
            'email' => 'dave@dave.com',
            'imageFileName' => 'dave.jpg',
            'password' => bcrypt('davedave'),
        ]);

    }
}
