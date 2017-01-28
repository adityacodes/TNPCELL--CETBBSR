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

        // php artisan db:seed --class=UsersTableSeeder       (Running Seeders Individually)
        $this->call(BranchTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TNPTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // $this->call(AlumniTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        // $this->call(LinksTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        // $this->call(OfficersTableSeeder::class);
        // $this->call(SlidersTableSeeder::class);
   
    }
}
