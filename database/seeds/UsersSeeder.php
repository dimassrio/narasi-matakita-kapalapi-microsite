<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
		$user->email = 'dimassrio@gmail.com';
		$user->password = \Hash::make('1234');
		$user->name = 'Dimas Satrio';
		$user->save();
    }
}
