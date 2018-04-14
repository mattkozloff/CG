<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('systems')->insert([
            'id' => 1,
            'name' => 'Community Garder',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
