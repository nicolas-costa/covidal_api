<?php

use Illuminate\Database\Seeder;

use App\Models\Report;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::insert([
            ['notified' => 702, 'suspicious' => 315, 'confirmed' => 23, 'discarded' => 364,	'deaths' => 2,	'created_at' => '2020-04-03 10:00:38'],
            ['notified' => 696, 'suspicious' => 352, 'confirmed' => 18, 'discarded' => 326,	'deaths' => 1,	'created_at' => '2020-04-02 10:00:38'],
            ['notified' => 664, 'suspicious' => 344, 'confirmed' => 18, 'discarded' => 302,	'deaths' => 1,	'created_at' => '2020-04-01 10:00:38'],
            ['notified' => 589, 'suspicious' => 289, 'confirmed' => 17, 'discarded' => 283,	'deaths' => 0,	'created_at' => '2020-03-30 10:00:38'],
            ['notified' => 575, 'suspicious' => 294, 'confirmed' => 17, 'discarded' => 264,	'deaths' => 0,	'created_at' => '2020-03-29 10:00:38']
        ]);
    }
}
