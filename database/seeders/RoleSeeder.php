<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\PermissionSeeder;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\FlareClient\Flare;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        foreach ($this->roles() as $role => $permissions) {
            Role::create(['name' => $role])->givePermissionTo($this->flattenPermissions($permissions));
        }

    }

    public function roles(): array
    {
        return [
            'admin' => [
                // Group permissions
                'manage permissions',
                'manage roles',
                'manage users',
                // Direct permissions
                'direct__permissions' => [
                    'edit categories',
                ]
            ],
        ];
    }

    /**
     * Flatten an array of permissions with nested arrays into a flat array of permissions.
     *
     * @param array $permissions
     * @return array
     */
    private function flattenPermissions(array $permissions): array
    {
        $result = [];
        foreach ($permissions as $permission) {
            if (is_array($permission)) {
                $result = array_merge($result, $this->flattenPermissions($permission));
            } elseif (array_key_exists($permission, app()[PermissionSeeder::class]->permissions())) {
                $result = array_merge($result, app()[PermissionSeeder::class]->permissions()[$permission]);
            } else {
                $result[] = $permission;
            }
        }
        return $result;
    }
}



