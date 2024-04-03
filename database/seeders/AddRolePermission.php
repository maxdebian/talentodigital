<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class AddRolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'users.index']);
        Permission::create(['name'=>'users.edit']);
        Permission::create(['name'=>'users.show']);
        Permission::create(['name'=>'users.create']);
        Permission::create(['name'=>'users.destroy']);

        $roleAdmin = Role::create(['name'=>'Administrator']);

        $roleAdmin->givePermissionTo([
            'users.index',
            'users.edit',
            'users.show',
            'users.create',
            'users.destroy',
        ]);
        $user = User::create([
            'name'=>    'newUser',
            'username'=>    'newUser',
            'email' =>  'newUser@gmail.com',
            'password'  => bcrypt('12345678'),
        ]);
        $user->assignRole('Administrator');
    }
}
