<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        foreach ($this->flattenArray($this->permissions())  as $permission) {
            Permission::create(['name' => $permission]);
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
                'edit roles',
                'delete roles',
            ],
            'manage users' => [
                'edit users',
                'delete users',
            ],
            'manage articles' => [
                'edit articles',
                'delete articles',
                'publish articles',
                'unpublish articles',
            ],
            'manage pages' => [
                'edit pages',
                'delete pages',
            ],
            'manage posts' => [
                'edit posts',
                'delete posts',
            ],
            'manage categories' => [
                'edit categories',
                'delete categories',
            ],
            'manage tags' => [
                'edit tags',
                'delete tags',
            ],
            'manage comments' => [
                'edit comments',
                'delete comments',
            ],
        ];
    }

    /**
     * Recursively flatten an array.
     *
     * @param array $input
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
