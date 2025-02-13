<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                "id" => 1,
                "name" => "Zakir BD",
                "email" => "zakir@gmail.com",
                'password'=> Hash::make(12345678),
                "email_verified_at" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 2,
                "name" => "Ashik Mia",
                "email" => "ashik@gmail.com",
                'password'=> Hash::make(12345678),
                "email_verified_at" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "id" => 3,
                "name" => "Arafat",
                "email" => "arafat@gmail.com",
                'password'=> Hash::make(12345678),
                "email_verified_at" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
