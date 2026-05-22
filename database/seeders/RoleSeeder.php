<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Utils\PermissionsConst;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        $adminRole = Role::updateOrCreate(
            ['name' => 'Superusuario'],
            [
                'description' => 'Acceso Dev',
            ]
        );

        $superRole = Role::updateOrCreate(
            ['name' => 'Administrador'],
            [
                'description' => 'Acceso total al sistema',
            ]
        );

        $userRole = Role::updateOrCreate(
            ['name' => 'Usuario'],
            [
                'description' => 'Usuario básico',
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Permisos
        |--------------------------------------------------------------------------
        */

        // TODOS los permisos
        $allPermissions = Permission::pluck('id')->toArray();

        /*
        |--------------------------------------------------------------------------
        | Sync permisos
        |--------------------------------------------------------------------------
        */

        $superRole->permissions()->sync($allPermissions);

        $adminRole->permissions()->sync($allPermissions);

        $userRole->permissions()->sync([
            PermissionsConst::DASHBOARD
        ]);

        
    }
}
