<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run(): void
    {
        // Create 100 additional users (total will be 1 existing + 100 = 101)
        User::factory(100)->create();
        
        // Create 500 todos
        Todo::factory(500)->create();
    }
}