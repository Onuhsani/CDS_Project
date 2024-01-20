<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CorperSeeder::class);
        $this->call(PostCategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(HouseAgentSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FavoriteSeeder::class);
        $this->call(HouseSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(PostCommentSeeder::class);
        $this->call(RentalSeeder::class);
    }
}
 