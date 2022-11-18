<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// $table->id();
// $table->string('name');
// $table->string('email')->unique();
// $table->string('password');
// $table->rememberToken();
// $table->string('level');
// $table->timestamps();



        User::create([
            "name"=> "Jonathan",
            "email"=> "jonathan@gmail.com",
            "password"=> bcrypt("jonathanpass"),
            "level"=> "admin",
        ]);


        User::create([
            "name"=> "Alex Smith",
            "email"=> "alexsmith@gmail.com",
            "password"=> bcrypt ("alexpass"),
            "level"=> "customer",
        ]);

        User::create([
            "name"=> "Alkana Fares",
            "email"=> "alkanafares@gmail.com",
            "password"=> bcrypt("alkanapass"),
            "level"=> "customer",
        ]);


    }
}
