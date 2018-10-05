<?php

use Illuminate\Database\Seeder;
use App\User;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Colin',
            'surname' => 'J',
            'email' => 'cjdemo@tp.net',
            'password' => '$2y$10$lfejd/NT3qQqYxK/6LiwIup40mVeCOkZfFQRft/ITW2HSrJGcW2XW'
        ]);
    }
}
