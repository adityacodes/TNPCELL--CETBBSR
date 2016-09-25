<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('branches')->insert([
            'id' =>'1',
            'name' => 'IT',
        ]);
        DB::table('branches')->insert([
            'id' =>'2',
            'name' => 'CET',
        ]); 

//Settings
        DB::table('settings')->insert([
                'metaname' => 'sitename',
                'metavalue' => 'TRAINING &amp; PLACEMENT CELL',
            ]);

//Super Admins
        DB::table('t_n_p_s')->insert([
            'name' => 'DUMMY PERSON',
            'regdno' => '1301102112',
            'branch' => 'CET',
            'email' => 'dummy@gmail.com',
            'gender' => 'male',
            'tenthyear' => '2012',
            'tenthpercent' => '90',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '90',
            'twelthboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
        ]);

        DB::table('users')->insert([
            'name' => '1301102112',
            'email' => 'dummy@gmail.com',
            'password' => bcrypt('dummy'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '1',
        ]);

        DB::table('t_n_p_s')->insert([
            'name' => 'Aditya Padhi',
            'regdno' => '1401106577',
            'branch' => 'IT',
            'email' => 'adityapadhi1996@gmail.com',
            'gender' => 'male',
            'tenthyear' => '2012',
            'tenthpercent' => '90',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '90',
            'twelthboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
        ]);

         DB::table('users')->insert([
            'name' => '1401106577',
            'email' => 'adityapadhi1996@gmail.com',
            'password' => bcrypt('Aditya@9658'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '1',
        ]);

//POSTS
         DB::table('posts')->insert([
            'id' => '1',
            'title' => 'JAI JAGANNATH',
            'slug' => 'ohh-dear',
            'tenthyear' => '2012',
            'tenthpercent' => '90',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '90',
            'twelthboard' => 'Any',
            'diplomayear' => '2013',
            'diplomapercent' => '90',
            'diplomaboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
        ]);

//Admin Rights only
         DB::table('t_n_p_s')->insert([
            'name' => 'Divyen Deep',
            'regdno' => '1401106594',
            'email' => 'deep.divyen@gmail.com',
            'gender' => 'male',
            'branch' => 'IT',
            'tenthyear' => '2012',
            'tenthpercent' => '92',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '94',
            'twelthboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
        ]);

         DB::table('users')->insert([
            'name' => '1401106594',
            'email' => 'deep.divyen@gmail.com',
            'password' => bcrypt('Divyen'),
            'confirmed' => '1',
            'admin' => '1',
            'superadmin' => '0',
        ]);

//POsts
         DB::table('posts')->insert([
            'id' => '2',
            'title' => 'JAI SHRI KRISHNA',
            'slug' => 'shree-krishna',
            'body' => 'This is a Shree Krishna Blogpost',
            'tenthyear' => '2012',
            'tenthpercent' => '90',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '90',
            'twelthboard' => 'Any',
            'diplomayear' => '2013',
            'diplomapercent' => '90',
            'diplomaboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
        ]);

//User rights only
         DB::table('t_n_p_s')->insert([
            'name' => 'USER ACCESS',
            'regdno' => '1401102112',
            'email' => 'user@gmail.com',
            'gender' => 'male',
            'branch' => 'CET',
            'tenthyear' => '2012',
            'tenthpercent' => '92',
            'tenthboard' => 'Any',
            'twelthyear' => '2014',
            'twelthpercent' => '94',
            'twelthboard' => 'Any',
            'cgpa' => '9.0',
            'backlog' => '2',
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
