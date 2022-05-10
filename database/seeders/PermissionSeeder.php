<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        //Some initially role configuration
        $roles = [
            'Org Admin' => [
            //Org Permisions
                //Internal User Permissions
                'view org_users',
                'create org_users',
                'update org_users',
                'delete org_users',

                //Internal Queue Permissions
                'view queues',
                'create queues',
                'update queues',
                'delete queues',

                //Ticket Permissions
                'view tickets',
                'create tickets',
                'update tickets',
                'delete tickets',

            //Client Permisions
                //Client Info Permissions
                'view clients',
                'create clients',
                'update clients',
                'delete clients',

                //Client User Permissions
                'view client_users',
                'create client_users',
                'update client_users',
                'delete client_users',
            ],
            'Org User' => [
            //Org Permisions
                //Internal User Permissions
                'view org_users',
                'create org_users',
                'update org_users',

                //Internal Queue Permissions
                'view queues',

                //Ticket Permissions
                'view tickets',
                'create tickets',
                'update tickets',

            //Client Permisions
                //Client Info Permissions
                'view clients',
                'create clients',
                'update clients',

                //Client User Permissions
                'view client_users',
                'create client_users',
                'update client_users',
            ]
        ];

        collect($roles)->each(function ($permissions, $role) {
            $role = Role::findOrCreate($role);
            collect($permissions)->each(function ($permission) use ($role) {
                $role->permissions()->save(Permission::findOrCreate($permission));
            });
        });
    }
}
