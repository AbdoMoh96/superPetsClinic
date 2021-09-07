<?php

namespace Database\Seeders;

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
//         $this->call(UsersSeeder::class);
//         $this->call(AdminsSeeder::class);
//         $this->call(LanguagesSeeder::class);
           $this->call(SliderSeeder::class);
//         $this->call(AboutSeeder::class);
//         $this->call(ContactSeeder::class);
//         $this->call(SettingsSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
