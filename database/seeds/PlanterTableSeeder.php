<?php

use Illuminate\Database\Seeder;

class PlanterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planters')->insert([
            'name' => '10" pot',
            'systemID' => 2,
            'comments' => 'important info',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('planters')->insert([
            'name' => 'blue vase',
            'systemID' => 2,
            'comments' => 'important info',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //
    }
}
