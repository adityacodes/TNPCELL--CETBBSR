<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'id' =>'1',
            'event_subject' => 'Event 1',
            'event_message' => 'This is my event 1. You should have known about it.',
        ]);

        DB::table('events')->insert([
            'id' =>'2',
            'event_subject' => 'Event 2',
            'event_message' => 'This is my event 2. You should have known about it.',
        ]);

        DB::table('events')->insert([
            'id' =>'3',
            'event_subject' => 'Event 3',
            'event_message' => 'This is my event 3. You should have known about it.',
        ]);
    }
}
