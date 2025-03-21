<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'admin',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@itsolutionstuff.com',
                'type'=>0,
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'User2',
                'email'=>'user2@itsolutionstuff.com',
                'type'=>0,
                'password'=> bcrypt('123456'),
             ]
         ];    
         
         foreach ($users as $key => $user) {
             User::create($user);
         }

    }
}
