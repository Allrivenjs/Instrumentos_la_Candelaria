<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Seller']);
        $role2 = Role::create(['name' => 'Buyer']);

        Permission::create(['name'=>'products.store',
            'description'=>'Create product'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'products.update',
            'description'=>'Update product'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'products.destroy',
            'description'=>'Delete product'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'categories.store',
            'description'=>'Create product'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categories.update',
            'description'=>'Update product'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categories.destroy',
            'description'=>'Delete product'])->syncRoles([$role1,$role2]);

    }
}
