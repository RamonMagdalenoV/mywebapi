<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate users table
        User::truncate();

        $faker = \Faker\Factory::create();

        // Creating a single administrator user
        $password = Hash::make('testkey');
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password
        ]);
        
        // Generating more users
        for ($i = 0; $i < 10 ; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
