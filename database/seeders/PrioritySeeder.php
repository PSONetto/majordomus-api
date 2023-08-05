<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('priorities')->insert([
            [
                'name' => 'Low',
            ],
            [
                'name' => 'Medium',
            ],
            [
                'name' => 'High',
            ]
        ]);
    }
}
