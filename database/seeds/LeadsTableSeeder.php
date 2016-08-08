<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('leads')->insert(
                [
                    'name'      => 'Shop ' . str_random(5),
                    'url'       => 'http://example.com',
                    'address'   => 'Rue de Genève 7, 1003 Lausanne',
                    'lat'       => 46.5215533,
                    'lng'       => 6.6287104
                ]
            );
        }
    }
}
