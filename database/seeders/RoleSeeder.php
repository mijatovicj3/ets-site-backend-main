<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'student'],
            ['id' => 2, 'name' => 'professor'],
            ['id' => 3, 'name' => 'admin'],
        ]);
    }
}
