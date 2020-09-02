<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::create([
        	'name'=>'Kaung Myat',
        	'profile'=>'images/user/admin.png',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('123456789'),
        	'phone'=>'0987654321',
        	'address'=>'YGN'

        ]);
        $admin->assignRole('admin');
    }
}
