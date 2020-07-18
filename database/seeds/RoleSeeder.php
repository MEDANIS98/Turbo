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
		$admin = Role::create(['name' => 'Super Admin']);
		$canUpdatePartScore = Permission::create(['name' => 'Update Part Views']);
		$admin->givePermissionTo($canUpdatePartScore);
		$permission = Permission::create(['name' => 'Access Stock']);
		$role = Role::create(['name' => 'Member']);
		$role->givePermissionTo($permission);
	}
}
