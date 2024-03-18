<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => UserRoleEnum::ADMIN->value]);
        Role::create(['name' => UserRoleEnum::GUEST->value]);
    }
}
