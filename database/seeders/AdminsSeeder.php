<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = new Admin();
        $admin1->name = "SPC Admin";
        $admin1->email = "admin@example.com";
        $admin1->password = Hash::make('1234');
        $admin1->save();
    }
}
