<?php

use Illuminate\Database\Seeder;

class SoilTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soil_type')->insert([
            'name' => 'mulch',
            'systemID' => 2,
            'comments' => 'not really soil, but you get it at the garden place',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('soil_type')->insert([
            'name' => 'Miracle-Gro Premium Potting Mix 8qt',
            'systemID' => 2,
            'comments' => 'It\s a miracle',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
