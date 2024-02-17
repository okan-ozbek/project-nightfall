<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserRoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Okan Ozbek',
                'email' => 'okancan+guest@live.nl',
                'password' => Hash::make('password'),
                'role' => UserRoleEnum::GUEST->value,
            ],
            [
                'name' => 'Okan Ozbek',
                'email' => 'okancan+admin@live.nl',
                'password' => Hash::make('password'),
                'role' => UserRoleEnum::ADMIN->value,
            ]
        ];

        foreach ($users as $user) {
            User::factory()->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password']
            ])->assignRole($user['role']);
        }
    }
}
