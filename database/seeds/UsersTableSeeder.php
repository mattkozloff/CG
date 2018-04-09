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
            'email' => 'dave@dave.com',
            'imageFileName' => 'dave.jpg',
            'password' => bcrypt('davedave'),
        ]);

        DB::table('users')->insert([
            'name' => 'Freddie Fred',
            'email' => 'fred@fred.com',
            'imageFileName' => 'fred.jpg',
            'password' => bcrypt('fredfred'),
        ]);
    }
}
