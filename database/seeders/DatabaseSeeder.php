<?php

namespace Database\Seeders;

use App\Models\Artists;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Artists::factory(15)->create();
        User::factory(15)->create();
         $this->call(GeneroSeeder::class);
    }
}
