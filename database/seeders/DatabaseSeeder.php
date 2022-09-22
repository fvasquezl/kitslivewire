<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Factories\ArticleFactory;
use Database\Factories\CategoryFactory;
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
        User::factory()->create([
            'name'=> 'Faustino',
            'email' => 'fvasquez@local.com',
        ]);
        $this->call(CategorySeeder::class);
        $this->call(ArticleSeeder::class);

    }
}
