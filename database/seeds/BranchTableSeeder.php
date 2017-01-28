<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'id' =>'1',
            'name' => 'IT',
        ]);
        DB::table('branches')->insert([
            'id' =>'2',
            'name' => 'CET',
        ]); 
    }
}
