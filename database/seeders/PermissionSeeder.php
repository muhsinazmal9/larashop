<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($this->permissions() as $group_name => $permissions) {
            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission, 'group_name' => $group_name]);
            }
        }
    }

    public function permissions(): array
    {
        return [
            'manage permissions' => [
                'edit permissions',
                'delete permissions',
            ],
            'manage roles' => [
                'list roles',
                'read roles',
                'create roles',
                'edit roles',
                'delete roles',
            ],
            'manage users' => [
                'list users',
                'read users',
                'create users',
                'edit users',
                'delete users',
            ],
            'manage categories' => [
                'list categories',
                'read categories',
                'create categories',
                'edit categories',
                'delete categories',
            ],
            'manage products' => [
                'list products',
                'read products',
                'create products',
                'edit products',
                'delete products',
            ],
        ];
    }

    /**
     * Recursively flatten an array.
     *
     * @param array $input
     *
     * @return array
     */
    private function flattenArray(array $input): array
    {
        $result = [];
        foreach ($input as $value) {
            if (is_array($value)) {
                $result = array_merge($result, $this->flattenArray($value));
            } else {
                $result[] = $value;
            }
        }

        return $result;
    }
}
