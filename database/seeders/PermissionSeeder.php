<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Utils\PermissionsConst;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dashboard
        Permission::updateOrCreate(
            ['id' => PermissionsConst::DASHBOARD],
            [
                'name' => 'dashboard.view',
                'description' => 'Ver Dashboard',
            ]
        );


        //Usuarios
        Permission::updateOrCreate(
            ['id' => PermissionsConst::LIST_USERS],
            [
                'name' => 'user.view',
                'description' => 'Ver usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::CREATE_USER],
            [
                'name' => 'user.create',
                'description' => 'Crear usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::EDIT_USER],
            [
                'name' => 'user.edit',
                'description' => 'Editar usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::DELETE_USERS],
            [
                'name' => 'user.delete',
                'description' => 'Eliminar usuarios',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::TOGGLE_USER_ACTIVE],
            [
                'name' => 'user.active',
                'description' => 'Activar/Desact usuarios',
            ]
        );

        //Roles
        Permission::updateOrCreate(
            ['id' => PermissionsConst::LIST_ROLES],
            [
                'name' => 'role.view',
                'description' => 'Ver roles',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::CREATE_ROLES],
            [
                'name' => 'role.create',
                'description' => 'Crear roles',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::EDIT_ROLES],
            [
                'name' => 'role.edit',
                'description' => 'Editar roles',
            ]
        );
        Permission::updateOrCreate(
            ['id' => PermissionsConst::DELETE_ROLES],
            [
                'name' => 'role.delete',
                'description' => 'Eliminar roles',
            ]
        );
    


    }
}
