<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([

            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => password_hash('1234',PASSWORD_DEFAULT),

        ]);

        User::create([

            'name'      => 'shuvo',
            'email'     => 'shuvo@gmail.com',
            'password'  => password_hash('1234',PASSWORD_DEFAULT),

        ]);

    }



}
