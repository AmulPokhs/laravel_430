<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user_array = array(
            array(
                'name' => 'User One',
                'email' => 'userone@gmail.com',
                'password' => Hash::make('userone123'),
                'role' => 'user'

        ),   array(
                'name' => 'Amul ',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin'

            ));
        DB::table('users')->insert($user_array);
    }
}
