<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Role::create(['name' => 'Super Admin']);
		$permission = Permission::create(['name' => 'Access Stock']);
		$role = Role::create(['name' => 'member']);
		$role->givePermissionTo($permission);
	}
}
