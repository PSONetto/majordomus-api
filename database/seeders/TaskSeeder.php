<?php

namespace Database\Seeders;

use App\Models\Assignee;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()
            ->hasAttached(Assignee::factory()
                ->count(rand(1, 4))
                ->create())
            ->count(10)
            ->create();
    }
}
