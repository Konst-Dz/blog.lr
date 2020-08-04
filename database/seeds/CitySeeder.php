<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\City::create(

            [
                'name' => 'Rech',

            ]

        );

        \App\City::create(

            [
                'name' => 'Vitebsk',

            ]

        );

        \App\City::create(

            [
                'name' => 'mozyr',

            ]

        );
    }
}
