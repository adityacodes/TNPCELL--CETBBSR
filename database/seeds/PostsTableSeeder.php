<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => '1',
            'title' => 'COMPANY 1',
            'slug' => 'company-one-placement-at-bbsr',
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
            'created_at' => '2017-01-28 15:16:41',
        ]);

         
         DB::table('posts')->insert([
            'id' => '2',
            'title' => 'COMPANY 2',
            'slug' => 'company-two-placement-at-bbsr',
            'body' => 'This is a Shree Krishna Blogpost. This is for TCS.',
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
            'created_at' => '2017-01-27 15:16:41',
            'published' => '1',
        ]);
    }
}
