<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
                'metaname' => 'sitename',
                'metavalue' => 'TRAINING &amp; PLACEMENT CELL',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'principal_name',
                'metavalue' => 'PK Patra',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'principal_image',
                'metavalue' => '/main/images/principal.jpg',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'principal_message',
                'metavalue' => 'College of Engineering and Technology has been a pool of meritorious students consistently for many years. And hence it has always tried to facilitate quality engineering education to equip and enrich young men and women to meet global challenges in development, innovation and application of technology in the service of humanity. Ever since its inception, a strong commitment to excellence in teaching and research has made CET, Bhubaneswar one of the top most colleges in Odisha. Its rich academic tradition has always attracted the most talented students who later contribute to the progress of the society. I would like to acknowledge the students for their consistent hard work due to which this college has been able to become the first and foremost choice of the aspiring engineers of Odisha. Let me also at the same time acknowledge the great alumni power, the present and the past faculty members of the institution who have built up this institution to high acclaim. With the guidance of teachers and of the college’s administrative staff, I hope the students will reach their port of dreams, sailing with the wind and sometimes against it; but sail they must and not drift or lie at anchor.',
            ]);

        DB::table('settings')->insert([
                'metaname' => 'pic_name',
                'metavalue' => 'Mr. Saroj Kumar Pradhan',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'pic_image',
                'metavalue' => '/main/images/pic.jpg',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'pic_message',
                'metavalue' => 'This is a message from Saroj Sir.',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_email',
                'metavalue' => 'admin@tnp.cet.edu.in',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_facebook',
                'metavalue' => '',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_googleplus',
                'metavalue' => '',
            ]);

        DB::table('settings')->insert([
                'metaname' => 'tnp_youtube',
                'metavalue' => '',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_instagram',
                'metavalue' => '',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_twitter',
                'metavalue' => '',
            ]);
        DB::table('settings')->insert([
                'metaname' => 'tnp_linkedin',
                'metavalue' => '',
            ]);

        DB::table('settings')->insert([
                'metaname' => 'tnp_address',
                'metavalue' => ' College Of Engineering And Technology <br>  Ghatikia, Bhubaneswar, India - 751003 <br> Phone: +91-7381110897 <br> FAX : I dont know',
          	]);
    }
}
