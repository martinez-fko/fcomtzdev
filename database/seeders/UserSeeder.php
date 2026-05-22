<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Usuario administrador
        |--------------------------------------------------------------------------
        */

        $super = User::updateOrCreate(
            [
                'email' => 'superadmin@fcomtzdev.com.mx',
            ],
            [
                'name' => 'Superusuario',
                'username' => 'Superusuario',
                'password' => Hash::make('@dminfc0*'),
                'active' => true,
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id' => 1
            ]
        );

        $admin = User::updateOrCreate(
            [
                'email' => 'admin@admin.com',
            ],
            [
                'name' => 'Administrador',
                'username' => 'admin',
                'password' => Hash::make('@dminfc0*'),
                'active' => true,
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id' => 2
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Usuario básico
        |--------------------------------------------------------------------------
        */

        $user = User::updateOrCreate(
            [
                'email' => 'user@user.com',
            ],
            [
                'name' => 'Usuario',
                'username' => 'usuario',
                'password' => Hash::make('userfc0*'),
                'active' => true,
                'email_verified_at' => date("Y-m-d H:i:s"),
                'role_id' => 3
            ]
        );
    }
}
