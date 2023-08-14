<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EdProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ed_programs')->insert([
            ['name' => 'Elektrotehničar za razvoj veb i mobilnih aplikacija'],
            ['name' => 'Elektrotehničar računarskih sistema i mreža'],
            ['name' => 'Elektrotehničar elektronskih komunikacija'],
            ['name' => 'Elektrotehničar energetike'],
            ['name' => 'Elektrotehničar elektronike'],
            ['name' => 'Elektroinstalater'],
            ['name' => 'Monter elektronske komunikacione infrastrukture'],
        ]);
    }
}
