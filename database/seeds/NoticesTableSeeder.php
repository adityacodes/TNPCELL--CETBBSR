<?php

use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->insert([
            'id' =>'1',
            'notice_subject' => 'Notice 1',
            'notice_message' => 'This is my Notice 1. You should have known about it.',
        ]);

        DB::table('notices')->insert([
            'id' =>'2',
            'notice_subject' => 'Notice 2',
            'notice_message' => 'This is my Notice 2. You should have known about it.',
        ]);

        DB::table('notices')->insert([
            'id' =>'3',
            'notice_subject' => 'Notice 3',
            'notice_message' => 'This is my Notice 3. You should have known about it.',
        ]);
    }
}
