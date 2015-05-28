<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Yuceli Polanco',
        'nickname' => 'Yuceli',
        'email'    => 'yuceli.polanco@gmail.com',
        'password' => Hash::make('awesome'),
    ));
    User::create(array(
        'name'     => 'Javier Ojeda',
        'nickname' => 'Javi',
        'email'    => 'ojeda.javier94@gmail.com',
        'password' => Hash::make('javier'),
    ));
}

}