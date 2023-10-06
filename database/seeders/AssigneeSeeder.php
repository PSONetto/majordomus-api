<?php

namespace Database\Seeders;

use App\Models\Assignee;
use Illuminate\Database\Seeder;

class AssigneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assignee::factory()
            ->count(10)
            ->create();
    }
}
