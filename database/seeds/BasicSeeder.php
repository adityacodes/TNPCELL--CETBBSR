<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
                'metaname' => 'registrations_open',
                'metavalue' => '1',
        ]);
    }
}
