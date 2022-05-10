<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([PermissionSeeder::class]);

        $user = User::factory(['name' => 'Administrator', 'email' => 'admin@msp.com'])
            ->withTeam()
            ->create();

        setPermissionsTeamId(1);
        $user->assignRole('Org Admin');
    }
}
