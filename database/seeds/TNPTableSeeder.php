<?php

use Illuminate\Database\Seeder;

class TNPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
