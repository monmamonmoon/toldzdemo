<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => hash::make('111'),
                    'role_id' => 1,
                ],
                [
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => hash::make('111'),
                    'role_id' => 2,
                ]
            ]
        );
    }
}
