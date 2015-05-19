<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Yuceli Polanco',
        'nickname' => 'Yuceli Polanco',
        'email'    => 'yuceli.polanco@gmail.com',
        'password' => Hash::make('awesome'),
    ));
}

}