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
            'name' => 'Juan',
            'email' => 'juan@correo.cl',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Valeria',
            'email' => 'vale@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
