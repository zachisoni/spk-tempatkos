<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alternative;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'user1',
            'email' => 'userone@gmail.com',
            'password' => bcrypt('test1234')
        ]);

        // Alternative::create([
        //     'name' => 'Kos Beji Timur',
        //     'user_id' => 1,
        //     'criteria1' => rand(1, 5),
        //     'criteria2' => rand(1, 5),
        //     'criteria3' => rand(1, 5),
        //     'criteria4' => rand(1, 5),
        //     'criteria5' => rand(1, 5),
        // ]);

        // Alternative::create([
        //     'name' => 'Kos Cendana',
        //     'user_id' => 1,
        //     'criteria1' => rand(1, 5),
        //     'criteria2' => rand(1, 5),
        //     'criteria3' => rand(1, 5),
        //     'criteria4' => rand(1, 5),
        //     'criteria5' => rand(1, 5),
        // ]);
    }
}
