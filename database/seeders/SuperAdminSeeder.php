<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => 'password',
        ]);

//        $role = Role::create(['name' => 'Super Admin', 'guard_name' => 'web']);
//        $role->syncPermissions(Permission::all());
//        $user->assignRole($role);
    }
}
