<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::create(
            [
            'name'=>'ramkesh',
            'email'=> 'ramkesh@gmail.com',
            'password'=> bcrypt('123456'),
            'mobile'=> '1234567890',
            'role'=>'1',
            ]
            );
    
    }
}
