<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'username' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'admin' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'username' => "Voula",
            'email' => 's.bochrini@gmail.com',
            'password' => bcrypt('voula'),
            'admin' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
