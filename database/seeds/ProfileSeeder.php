<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(
            [
                'name' => 'petr',
                'surname' => 'vedrich',
                'email' => 'petr@mail.ru',
                'surname' => 'vedrich',
                'user_id' => '5'
            ]
        );
    }
}
