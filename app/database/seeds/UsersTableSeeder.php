<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
            'email'    => 'admin@blog.com',
            'password' => Hash::make('123456'),
            'name'     => 'John Doe'
        ));
	}

}