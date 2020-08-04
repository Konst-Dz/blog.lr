<?php

use Illuminate\Database\Seeder;
use App\Person;
class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create(
                    [
                       'login' => 'Ziggert',
                       'password' => 'zzzert',
                       'cities_id' => '1',

                   ]
                    );

        Person::create(
            [
                'login' => 'Ala',
                'password' => 'ertdr',
                'cities_id' => '3',

            ]
        );

    }

}
