<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
              'title'=>'Mr.',
              'name'=>'User',
              'last_name'=>'',
              'email'=>'user@gmail.com',
              'phone'=>'00000000000',
              'type'=>0,
              'password'=> bcrypt('123456'),
            ],
            [
              'title'=>'Mr.',
              'name'=>'Super Admin User',
              'last_name'=>'',
              'email'=>'super-admin@gmail.com',
              'phone'=>'11111111111',
              'type'=>1,
              'password'=> bcrypt('123456'),
            ],
            [
              'title'=>'Mr.',
              'name'=>'Admin User',
              'last_name'=>'',
              'email'=>'admin@gmail.com',
              'phone'=>'22222222222',
              'type'=> 2,
              'password'=> bcrypt('123456'),
            ],
            [
              'title'=>'Mr.',
              'name'=>'Agent User',
              'last_name'=>'',
              'email'=>'agent-user@gmail.com',
              'phone'=>'33333333333',
              'type'=>3,
              'password'=> bcrypt('123456'),
            ],
            [
              'title'=>'Mr.',
              'name'=>'Owner User',
              'last_name'=>'',
              'email'=>'owner-user@gmail.com',
              'phone'=>'44444444444',
              'type'=>4,
              'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
