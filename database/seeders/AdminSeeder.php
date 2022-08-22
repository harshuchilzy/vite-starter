<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Permission::create(['name' => 'access admin dashboard']);

        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('access admin dashboard');
        $adminRole->givePermissionTo('create users');
        $adminRole->givePermissionTo('edit users');
        $adminRole->givePermissionTo('delete users');


        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('pass'),
            'email_verified_at' => now()
        ]);
        $user->assignRole($adminRole);

        Permission::create(['name' => 'access user dashboard']);

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('access user dashboard');

    }
}
