<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role = Role::find(['name' => 'administrator']);
        // $role = new Role();
		// $roleAdmin = $role->create([
		// 	'name' => 'Administrator',
		// 	'slug' => 'administrator',
		// 	'description' => 'manage administration privileges'
		// ]);
		$user = User::find(1);
		$user->assignRole($role);

    }
}
