<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
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
        $this->call(TypeArticleSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(DureeLocationSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        Article::factory(10)->create();
        User::factory(5)->create();
        Client::factory(5)->create();
    }
}
