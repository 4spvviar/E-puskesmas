<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin Dua',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('123456'),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => $user['password'],
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}