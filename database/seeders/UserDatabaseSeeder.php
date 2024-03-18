<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\DTO\UserDTO;
use App\Enums\UserRoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserDatabaseSeeder extends Seeder
{
    /**
     * @throws UnknownProperties
     */
    public function run(): void
    {
        $users = [
            new UserDTO([
                'name' => 'Okan can Ozbek',
                'email' => 'o.ozbek@nightfall.com',
                'password' => Hash::make('password'),
                'role' => UserRoleEnum::ADMIN->value
            ]),
        ];

        foreach ($users as $user) {
            User::factory()->create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password
            ])->assignRole($user->role);
        }
    }
}
