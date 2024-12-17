<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Card;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CardSeeder::class,
            CoachSeeder::class,
            OrderSeeder::class,
            PlayerSeeder::class,
            PostSeeder::class,
            TournamentSeeder::class,
            SchoolTournamentSeeder::class,
            RoleSeeder::class,
       ]);

        \App\Models\Coach::create([
//            'name' => 'Greg Hobelmann',
//            'active' => '1',
//            'school_id' => '1', // school_id
        ]);
        \App\Models\User::create([
            'first_name' => 'Greg',
            'last_name' => 'Hobelmann',
            'email' => 'greg@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'school_id' => '1', // school_id
        ]);
        \App\Models\Course::create([
            'name' => 'Smith Center Muni',
            'par' => '71',
            'slope' => '121.1',
            'front_tee_rating' => '68.2',
            'middle_tee_rating' => '70.1',
            'back_tee_rating' => '73.8',
            'front_tee_yardage' => '5421',
            'middle_tee_yardage' => '5689',
            'back_tee_yardage' => '6022',

        ]);


        \App\Models\Store::create([
            'name' => 'MLM Industries',
            'user_id' => 1,
        ]);

        \App\Models\Product::create(['name' => 'Energy Drink', 'store_id' => 1]);
        \App\Models\Product::create(['name' => 'Water Purifier', 'store_id' => 1]);
        \App\Models\Product::create(['name' => 'Toothpaste', 'store_id' => 1]);
        \App\Models\Product::create(['name' => 'Magic Bracelet', 'store_id' => 1]);

        \App\Models\Order::factory()->count(902)->create(['product_id' => '1']);
        \App\Models\Order::factory()->count(760)->create(['product_id' => '2']);
        \App\Models\Order::factory()->count(543)->create(['product_id' => '3']);
        \App\Models\Order::factory()->count(632)->create(['product_id' => '4']);
    }
}
