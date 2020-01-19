<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'ADMIN',
            'account' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'level' => \App\User::ADMIN,
        ]);
    }
}
