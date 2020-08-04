<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'login' =>\Illuminate\Support\Str::random(8),
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        User::create(
            [
                'login' => 'werder',
                'password' => 'werddd'
            ]
        );

    }
}
