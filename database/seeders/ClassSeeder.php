<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['year' => 1, 'name' => 'S1A'],
            ['year' => 1, 'name' => 'S1B'],
            ['year' => 1, 'name' => 'S1C'],
            ['year' => 1, 'name' => 'S1D'],
            ['year' => 1, 'name' => 'S1E'],
            ['year' => 1, 'name' => 'S1F'],
            ['year' => 1, 'name' => 'S1G'],
            ['year' => 1, 'name' => 'S1H'],
            ['year' => 1, 'name' => 'S1I'],
            ['year' => 1, 'name' => 'E1A'],
            ['year' => 1, 'name' => 'R1A'],
            ['year' => 1, 'name' => 'R1B'],
            
            ['year' => 2, 'name' => 'S2A'],
            ['year' => 2, 'name' => 'S2B'],
            ['year' => 2, 'name' => 'S2C'],
            ['year' => 2, 'name' => 'S2D'],
            ['year' => 2, 'name' => 'S2E'],
            ['year' => 2, 'name' => 'S2F'],
            ['year' => 2, 'name' => 'S2G'],
            ['year' => 2, 'name' => 'S2H'],
            ['year' => 2, 'name' => 'E2A'],
            ['year' => 2, 'name' => 'R2A'],
            ['year' => 2, 'name' => 'R2B'],
            
            ['year' => 3, 'name' => 'S3A'],
            ['year' => 3, 'name' => 'S3B'],
            ['year' => 3, 'name' => 'S3C'],
            ['year' => 3, 'name' => 'S3D'],
            ['year' => 3, 'name' => 'S3E'],
            ['year' => 3, 'name' => 'S3F'],
            ['year' => 3, 'name' => 'S3G'],
            ['year' => 3, 'name' => 'S3H'],
            ['year' => 3, 'name' => 'E3A'],
            ['year' => 3, 'name' => 'R3A'],
            ['year' => 3, 'name' => 'R3B'],
            
            ['year' => 4, 'name' => 'S4A'],
            ['year' => 4, 'name' => 'S4B'],
            ['year' => 4, 'name' => 'S4C'],
            ['year' => 4, 'name' => 'S4D'],
            ['year' => 4, 'name' => 'S4E'],
            ['year' => 4, 'name' => 'S4F'],
            ['year' => 4, 'name' => 'S4G'],
            ['year' => 4, 'name' => 'S4H'],
            ['year' => 4, 'name' => 'E4A'],
            ['year' => 4, 'name' => 'R4A'],
            ['year' => 4, 'name' => 'R4B'],
        ]);
    }
}
