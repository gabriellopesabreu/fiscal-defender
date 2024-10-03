<?php

namespace Database\Seeders;

use App\Models\AutomaticRoutine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutomaticRoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AutomaticRoutine::factory(7)->create();
    }
}
