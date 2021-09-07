<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
           'code' => 'en',
           'language' => 'English',
           'created_at' => Carbon::now()
        ]);

        DB::table('languages')->insert([
            'code' => 'ar',
            'language' => 'Arabic',
            'created_at' => Carbon::now()
        ]);
    }
}
