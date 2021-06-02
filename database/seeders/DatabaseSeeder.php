<?php

namespace Database\Seeders;

use App\Models\Artists;
use App\Models\User;
use App\Models\Music;
use App\Models\Album;
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
        User::factory(1)->create();
        Artists::factory(15)->create();
        $this->call(GeneroSeeder::class);
        Album::factory(15)->create();
        Music::factory(15)->create();
        
    }
}
