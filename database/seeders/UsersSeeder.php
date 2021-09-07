<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->first_name = "John";
        $user1->last_name = "mike";
        $user1->email = "john@example.com";
        $user1->password = Hash::make('1234');
        $user1->save();

        $address = new Address();
        $address['user_id'] = $user1['id'];
        $address['city'] = 'cairo';
        $address['street'] = 'elharam shar3 eltalatene';
        $address['block'] = 'block number 12';
        $address['apartment'] = 'apartment number 10';
        $address['floor'] = 'floor number 3';
        $address['postal'] = '25458';
        $address['info'] = 'shar3 osama el fe2e el motafar3 men shar3 el talatene';
        $address->save();
    }
}
