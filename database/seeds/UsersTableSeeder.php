<?php

use Illuminate\Database\Seeder;
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
        User::create([
        	'name' 		=> 'Carlos',
        	'email' 	=> 'coolfresh83@gmail.com',
        	'password'	=> bcrypt('123456'),
        	'role'		=> 0
        	]);

        User::create([
        	'name' 		=> 'Soporte',
        	'email' 	=> 'soporte@gmail.com',
        	'password'	=> bcrypt('123456'),
        	'role'		=> 1
        	]);

        User::create([
        	'name' 		=> 'Cliente',
        	'email' 	=> 'cliente@gmail.com',
        	'password'	=> bcrypt('123456'),
        	'role'		=> 2
        	]);
    }
}
