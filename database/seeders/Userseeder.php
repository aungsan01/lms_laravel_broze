<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =[
            [
                'name'=>'John Doe',
                'email'=> 'johndoe@gmail.com',
                'password'=> bcrypt(12345678),
                'role'=>'student'
            ],
            [
                'name'=>'Instructor',
                'email'=> 'instructor@gmail.com',
                'password'=> bcrypt(12345678),
                'role'=>'instructor'
            ],
            ];
                User::insert($users);
    }
}
