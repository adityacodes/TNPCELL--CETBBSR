<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '1301102112',
            'email' => 'dummy@gmail.com',
            'password' => bcrypt('dummy'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => '1401106577',
            'email' => 'adityapadhi1996@gmail.com',
            'password' => bcrypt('Aditya@9658'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => '1401106594',
            'email' => 'deep.divyen@gmail.com',
            'password' => bcrypt('Divyen'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '0',
        ]);

        DB::table('users')->insert([
            'name' => '1401102112',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'confirmed' => '1',
            'admin' => '0',
            'superadmin' => '0',
        ]);
    }
}
