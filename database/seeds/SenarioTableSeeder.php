<?php

use Illuminate\Database\Seeder;

class SenarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('senarios')->insert(
            [
            'title' => 'title1',
            'overview' => 'overview1',
            ],
        );
    
    }
}
